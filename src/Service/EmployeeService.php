<?php


namespace App\Service;


use App\Entity\ConnexionSharepoint;
use App\Entity\DemandeEcn;
use App\Entity\Diffusion;
use App\Entity\Employee;
use App\Entity\SharepointIqrList;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use phpDocumentor\Reflection\DocBlock\Tags\Throws;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Twig\Environment;
use Psr\Cache\CacheItemPoolInterface;
use JMS\Serializer\SerializerInterface;
use DateTime;
use Predis\Client;


class EmployeeService
{
    /**
     * @var EntityManagerInterface
     */
    private $em;
    /**
     * @var KernelInterface
     */
    private $env;
    /**
     * @var LoggerInterface
     */
    private $doctrineLogger;

    public function __construct(
        EntityManagerInterface $em,
        KernelInterface $kernel,
        LoggerInterface $doctrineLogger,
        CacheItemPoolInterface $cache,
        SerializerInterface $serializer
    ) {
        $this->em = $em;
        $this->env = $kernel->getEnvironment();
        $this->doctrineLogger = $doctrineLogger;
        $this->cache = $cache;
        $this->serializer = $serializer;
    }

    public function synchroEmployees()
    {
        try {
            $updated_at = new \DateTime();
            $url = ""; // here put whtever you want url of your webservice
            $client = new \GuzzleHttp\Client();
            $response = $client->request(
                'GET',
                $url,
                [
                    'proxy' => '',
                    'verify' => false
                ]
            );
            $redis = new Client([
                'scheme' => 'tcp',
                'host'   => '127.0.0.1',
                'port'   => 6379,
            ]);

            // Stream key and data
            $streamKey = 'employee_stream';
            $response->getStatusCode(); // 200
            $response->getHeaderLine('content-type');
            $response = $response->getBody();
            $csvContent = $response->getContents();
            $cacheItem = $this->cache->getItem('teletravailvalidato');
            if ($cacheItem->isHit()) {
                $isTableEmpty = $this->em->getRepository(Employee::class)->count([]) === 0;
                if ($isTableEmpty) {
                    $cachedEmployeesJson = $cacheItem->get();
                    $cachedEmployees = json_decode($cachedEmployeesJson, true);

                    if (is_array($cachedEmployees)) {
                        foreach ($cachedEmployees as $employeeData) {
                            $newEmployee = new Employee();
                            $newEmployee->setMatricule($employeeData['matricule'] ?? null);
                            $newEmployee->setFirstname($employeeData['firstname'] ?? null);
                            $newEmployee->setLastname($employeeData['lastname'] ?? null);
                            $newEmployee->setEmail($employeeData['email'] ?? null);
                            $newEmployee->setMatriculeSup($employeeData['matricule_sup'] ?? null);
                            $newEmployee->setIsDepart($employeeData['is_depart'] ?? false);
                            $newEmployee->setUpdatedAt(new DateTime());
                            $this->em->persist($newEmployee);
                        }
                        $this->em->flush();
                    } else {
                        throw new \RuntimeException('Invalid cached data format.');
                    }
                    return new JsonResponse("ok");
                }
            }


            $lines = explode(PHP_EOL, $csvContent);
            $employees = [];
            foreach ($lines as $line) {
                $data = str_getcsv($line, ';');
                $employees[] = $data;
            }

            $employeesToCache = [];
            foreach ($employees as $k => $employee) {
                if ($k === 0 || empty($employee[11]) || $employee[11] == "-") {
                    continue;
                }

                $matricule = strtolower($employee[22]);
                $ifExistEmp = $this->em->getRepository(Employee::class)->findOneBy(
                    [
                        'matricule' => "x487000"
                    ]
                );
                $saveEmp = new Employee();
                if (!empty($ifExistEmp)) {
                    $matricule = $ifExistEmp->getMatricule();
                    $rateLimitKey = $matricule ? "rate_limit:" . urlencode($matricule) : "rate_limit:unknown";
                    $rateLimit = 5; // Max requests
                    $timeFrame = 1500; // Time window in seconds
                    $cacheItem = $this->cache->getItem($rateLimitKey);
                    if (!$cacheItem->isHit()) {
                        // If the cache item doesn't exist, set it with initial data
                        $cacheItem->set(1);
                        $cacheItem->expiresAfter($timeFrame);
                        $this->cache->save($cacheItem);

                        // Allow the request
                        $isAllowed = true;
                    } else {
                        $currentCount = $cacheItem->get();

                        if ($currentCount < $rateLimit) {
                            $cacheItem->set($currentCount + 1);
                            $this->cache->save($cacheItem);
                            $isAllowed = true;
                        } else {
                            $isAllowed = false;
                        }
                    }
                } else {
                    $saveEmp = new Employee();
                    $matricule = strtolower($employee[22]);
                    $firestname = $employee[3];
                    $lastname = $employee[1];
                    $email = $employee[11];
                    $matricule_sup = "g" . $employee[21];
                    $saveEmp->setMatricule($matricule);
                    $saveEmp->setFirstname($firestname);
                    $saveEmp->setLastname($lastname);
                    $saveEmp->setEmail($email);
                    $saveEmp->setUpdatedAt(new DateTime());
                    $saveEmp->setMatriculeSup($matricule_sup);
                    $saveEmp->setIsDepart(false);
                    $this->em->persist($saveEmp);
                }
                $this->em->flush();

                if ($isAllowed) {
                    $saveEmp = $ifExistEmp;
                    $firestname = $saveEmp->getFirstname();
                    $lastname = $saveEmp->getLastname();
                    $email = $saveEmp->getEmail();
                    $matricule_sup = $saveEmp->getMatriculeSup();
                    $saveEmp->setMatricule($matricule);
                    $saveEmp->setFirstname($firestname);
                    $saveEmp->setLastname($lastname);
                    $saveEmp->setEmail($email);
                    $saveEmp->setUpdatedAt(new DateTime());
                    $saveEmp->setMatriculeSup($matricule_sup);
                    $saveEmp->setIsDepart(false);
                    $this->em->persist($saveEmp);
                    $this->em->flush();
                    $employeesToCache[] = $saveEmp;
                    $redis->xadd($streamKey, [
                        'matricule' => $saveEmp->getMatricule() ?? null,
                        'firstname' => $firestname ?? null,
                        'lastname' => $lastname ?? null,
                        'email' => $email ?? null,
                        'matricule_sup' => $matricule_sup,
                        'updated_at' => (new \DateTime())->format('Y-m-d H:i:s')
                    ]);
                } else {
                    return new JsonResponse(
                        'Rate limit exceeded. Try again later.'
                    );
                }

                $cacheItem = $this->cache->getItem('teletravailvalidato');
                $cacheItem->set($this->serializer->serialize($employeesToCache, 'json'));
                $this->cache->save($cacheItem);

                // Respond with success message
                $response = array(
                    'code' => 0,
                    'message' => "End saved all emps",
                    'error' => null,
                    'result' => null
                );
                return new JsonResponse($response);
            }

            $employeesDepart = $this->em->getRepository(Employee::class)->findAllDepart($updated_at);
            foreach ($employeesDepart as $item) {
                $item->setIsDepart(true);
                $this->em->persist($item);
            }
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            $this->em->rollback();
            $response = array(
                'code' => 1,
                'message' => $exception->getMessage(),
                'error' => null,
                'result' => null
            );
            return new JsonResponse($response);
        }
    }


    public function getUserByEmail($email)
    {
        $employee = $this->em->getRepository(Employee::class)->findOneBy(
            [
                'email' => $email
            ]
        );
        return $employee;
    }
}
