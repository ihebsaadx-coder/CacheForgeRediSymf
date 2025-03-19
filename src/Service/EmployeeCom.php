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

class EmployeeCom
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
        LoggerInterface $doctrineLogger
    )
    {
        $this->em = $em;
        $this->env = $kernel->getEnvironment();
        $this->doctrineLogger = $doctrineLogger;
    }

    public function synchroEmployeesRedis()
    {
        try {
            $updated_at = new \DateTime();
            $url = "";
            $client = new \GuzzleHttp\Client();
            $response = $client->request(
                'GET',
                $url,
                [
                    'proxy' => '',
                    'verify' => false
                ]
            );
            $response->getStatusCode(); # 200
            $response->getHeaderLine('content-type');
            $response = $response->getBody();
            $csvContent = $response->getContents();

            // Diviser le contenu CSV en lignes
            $lines = explode(PHP_EOL, $csvContent);

            // Initialiser le tableau résultant
            $employees = [];

            // Parcourir chaque ligne du CSV
            foreach ($lines as $line) {
                // Analyser la ligne CSV en tant que tableau en utilisant le point-virgule comme séparateur
                $data = str_getcsv($line, ';');

                // Ajouter le tableau de données au tableau résultant
                $employees[] = $data;
            }
            foreach ($employees as $k => $employee) {
                if ($k === 0 || empty($employee[11]) || $employee[11] == "-") {
                    continue;
                }
                $matricule = strtolower($employee[22]);
                $ifExistEmp = $this->em->getRepository(Employee::class)->findOneBy(
                    [
                        'matricule' => $matricule
                    ]
                );
                $saveEmp = new Employee();
                if(!empty($ifExistEmp)){
                    $saveEmp = $ifExistEmp;
                }
                $firestname = $employee[3];
                $lastname = $employee[1];
                $email = $employee[11];
                $matricule_sup = "g" . $employee[21];
                $saveEmp->setMatricule($matricule);
                $saveEmp->setFirstname($firestname);
                $saveEmp->setLastname($lastname);
                $saveEmp->setEmail($email);
                $saveEmp->setUpdatedAt($updated_at);
                $saveEmp->setMatriculeSup($matricule_sup);
                $saveEmp->setIsDepart(false);
                $this->em->persist($saveEmp);
            }
            $this->em->flush();

            // check list employees départ
            $employeesDepart = $this->em->getRepository(Employee::class)->findAllDepart($updated_at);
            foreach ($employeesDepart as $item) {
                $item->setIsDepart(true);
                $this->em->persist($item);
                $this->em->flush();
            }
            $response = array(
                'code' => 0,
                'message' => "End saved all emps",
                'error' => null,
                'result' => null
            );
            return new JsonResponse($response);
        } catch (\Exception $exception) {
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
                'email'=>$email
            ]
        );
        return $employee;
    }

}
