<?php

namespace App\Controller;

use App\Entity\BuClient;
use App\Entity\CommercialOrganization;
use App\Entity\Demand;
use App\Entity\DistributionChannel;
use App\Entity\Employee;
use App\Entity\GroupVendor;
use App\Entity\ResponsablesRH;
use App\Entity\Salarie;
use App\Entity\Signatories;
use App\Entity\TestRedis;
use App\Form\DemandFormType;
use App\Form\TestRedisType;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Flasher\Prime\FlasherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Polyfill\Intl\Idn\Resources\unidata\DisallowedRanges;
// use GuzzleHttp\Client;
use JMS\Serializer\SerializerInterface;
use Psr\Cache\CacheItemPoolInterface;
use SebastianBergmann\Type\TrueType;
use Thybag\SharePointAPI;
use Predis\Client;
use App\Message\NewPostMessage;
use Symfony\Component\Messenger\MessageBusInterface;


class DemandController extends AbstractController
{







    /**
    
     * DemandeController constructor.
    
     * @param string $url_activiti_startprocess
     * @param string $token_activiti
     * @param string $sp_wsdl
     * @param string $sp_username
     * @param string $sp_password
     */

    public function __construct(
        SerializerInterface $serializer,
        EntityManagerInterface $em,
        CacheItemPoolInterface $cache,
        MessageBusInterface $bus

    ) {
        $this->serializer = $serializer;
        $this->em = $em;
        $this->cache = $cache;
        $this->bus = $bus;
    }
    #[Route('/notfound', name: 'notfound')]
    public function notfound(ManagerRegistry $doctrine, Request $request, FlasherInterface $flasher, SessionInterface $session): Response
    {
        $user = $this->getUser();
        $matricule = $user->getUserIdentifier();
        $fullname = $user->getFullName();
        $createdAt = new DateTime("NOW");
        $RedisFile = new TestRedis();
        // $decodedResult = $this->ConsumeGroupCreate($request);
        // $listPRepo = json_decode($decodedResult->getContent(),true);
        $form_demand = $this->createForm(
            TestRedisType::class,
            $RedisFile
            // , ['listRepo'=>array_column($listPRepo, 1)]
        );
        parse_str($request->getContent(), $requestParset);
        $form_demand->handleRequest($request);
        if ($form_demand->isSubmitted() && $form_demand->isValid() && $request->isMethod('POST')) {
        }

        return $this->render('demand/index.html.twig', [
            'username' => $fullname,
            'form' => $form_demand->createView(),
            'matricule' => $matricule,
            'linkCockpit' => $this->url_cockpit,
        ]);
    }




    #[Route('/newest-consume', methods: ['POST'], name: 'newestconsumer')]
    public function NewConsumer(Request $request): JsonResponse
    {
        if ($request->isMethod('post')) {
            $streamKey = 'file_update_stream';
            $consumerGroup = 'file_updates';
            $newConsumer = 'consumeriheb11';
            $minIdleTime = 5000;
            $startId = '0';
            try {
                $redis = new Client([
                    'scheme' => 'tcp',
                    'host'   => '127.0.0.1',
                    'port'   => 6379,
                ]);
                [$nextId, $claimedMessages] = $redis->xautoclaim(
                    $streamKey,
                    $consumerGroup,
                    $newConsumer,
                    $minIdleTime,
                    $startId
                );
                $data = [];
                if (!empty($claimedMessages)) {
                    foreach ($claimedMessages as $messageId => $messageData) {
                        array_push($data, [
                            'messageid' => $messageId,
                            'messagedata' => $messageData,
                            'consumername' => $newConsumer
                        ]);
                    }
                    return new JsonResponse($data, JsonResponse::HTTP_OK);
                } else {
                    return new JsonResponse("there is no stream on pending");
                }
            } catch (\Exception $e) {
                return new JsonResponse(['error' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }




    // this is the search of redis 

    #[Route('/search', methods: "GET", name: 'search')]
    public function search(HttpFoundationRequest $request, HttpClientInterface $client)
    {
        // $redis =  new Client([
        //     'scheme' => 'tcp',
        //     'host'   => '172.22.0.2',
        //     'port'   => 6005,
        // ]);

        $postId = $this->createNewPost(); // Assume this returns the post ID
        $creatorId = $this->getUser()->getId();

        // Dispatch the message to the queue
        $this->bus->dispatch(new NewPostMessage($postId, $creatorId));

        // $query = $request->query->get('query');
        // $query = strtolower(trim($query));
        // $results = $redis->executeRaw([
        //     'FT.SEARCH',
        //     'employeesindex',
        //     $query,
        //     'LIMIT',
        //     '0',
        //     '10'
        // ]);
        // $arrtemp = [];
        // foreach ($results as $result) {
        //     $arrtemp[] = $result;
        // }
        return new JsonResponse($arrtemp, JsonResponse::HTTP_OK);
    }


    #[Route('/consume-file-create-group', methods: "POST", name: 'consumefileupdate')]

    public function ConsumeGroupCreate(Request $request): JsonResponse
    {
        $documents = [];
        $redis =  new Client([
            'scheme' => 'tcp',
            'host'   => '172.22.0.2',
            'port'   => 6005,
        ]);
        // $url = "https://annuaire.comon/webservices/presents_all";
        // $client = new \GuzzleHttp\Client();
        // $response = $client->request(
        //     'GET',
        //     $url,
        //     [
        //         'proxy' => '',
        //         'verify' => false
        //     ]
        // );
        // $response->getStatusCode(); # 200
        // $response->getHeaderLine('content-type');
        // $response = $response->getBody();
        // $csvContent = $response->getContents();
        // $lines = explode(PHP_EOL, $csvContent);
        // $employees = [];
        // $redis->executeRaw([
        //     'FT.CREATE', 'employeesindex', 'SCHEMA',
        //     'matricule', 'TEXT',
        //     'firstname', 'TEXT',
        //     'lastname', 'TEXT',
        //     'email', 'TEXT',
        //     'matriculesup', 'TEXT'
        // ]);
        // foreach ($lines as $line) {
        //     $data = str_getcsv($line, ';');
        //     $employees[] = $data;
        // }
        // foreach ($employees as $k => $employee) {

        //     if ($k === 0 || empty($employee[11]) || $employee[11] == "-") {
        //         continue;
        //     }
        //     $matricule = strtolower($employee[22]);
        //     $firstname = $employee[3];
        //     $lastname = $employee[1];
        //     $email = $employee[11];
        //     $matricule_sup = "g" . $employee[21];
        //     $redis->executeRaw([
        //         'FT.ADD',
        //         'employeesindex',
        //         $k,
        //         1.0,
        //         'FIELDS',
        //         'matricule', $matricule,
        //         'firstname', $firstname,
        //         'lastname', $lastname,
        //         'email', $email,
        //         'matriculesup', $matricule_sup
        //     ]);
        // }
        // $redis->executeRaw([
        //     'FT.CREATE', 'productIndexOP', 'SCHEMA',
        //     'category', 'TAG',   // 'category' is a tag, allowing for faceting
        //     'price', 'NUMERIC',  // 'price' is a numeric field for faceting
        //     'rating', 'NUMERIC'  // 'rating' is a numeric field for faceting
        // ]);
        // $documents = [
        //     ['doc1', 'Electronics', 100, 4.5],
        //     ['doc2', 'Furniture', 150, 3.8],
        //     ['doc3', 'Electronics', 200, 4.7],
        //     ['doc4', 'Clothing', 50, 3.2],
        //     ['doc5', 'Furniture', 300, 4.1]
        // ];

        // foreach ($documents as $doc) {
        //     $redis->executeRaw([
        //         'FT.ADD', 'productIndexOP', $doc[0], 1.0, 'FIELDS', 
        //         'category', $doc[1], 
        //         'price', $doc[2], 
        //         'rating', $doc[3]
        //     ]);
        // }
        //  this is the part of aggregation
        $results = $redis->executeRaw([
            'FT.AGGREGATE',
            'employeesindex',
            '*',
            'WITHCURSOR',
            'LOAD',
            '1',
            '@matricule',
            // 'APPLY','upper(@matricule)', 'AS' , 'UpperWord',
            'FILTER',
            'startswith(@matricule, "g70")',
            // 'FILTER',  "@title == 'Redis Search 3'",            
            'GROUPBY',
            '1',
            '@matricule',
            // 'LIMIT', '0', '1',
            // 'REDUCE', 'COUNT', '0', 'AS', 'count',
            // 'SORTBY', '2', '@count', 'DESC',
        ]);
        $cursorId = $results[1];
        $data = $results[0];
        while ($cursorId != 0) { // Continue until the cursor ID is 0 (cursor exhausted)
            $nextResults = $redis->executeRaw(['FT.CURSOR', 'READ', 'employeesindex', (string)$cursorId, 'COUNT', '5']);
            $data = array_merge($data, $nextResults[0]); // Merge new data into the result array
            $cursorId = $nextResults[1]; // Update cursor ID
        }


        //     foreach ($results as $key => $result) {
        //         if (is_array($result)) {
        //             $documents[] = $result[1];
        //         }
        //     }
        // // Generate 150 random lines
        // $documents = [];
        // for ($i = 160; $i <= 1000; $i++) {
        //     $docId = 'doc' . $i;
        //     $title = 'Redis Search ' . rand(1, 10); // Random number for title
        //     $description = 'Exploring Redis capabilities with various examples and use cases. ' . $this->generateRandomString(20); 
        //     $documents[] = [$docId, $title, $description];
        // }
        // $redis->multi();
        // foreach ($documents as $doc) {
        //     try {
        //         $redis->executeRaw([
        //             'FT.ADD', 
        //             'ihebsnewindex', 
        //             $doc[0], 
        //             1.0, 
        //             'FIELDS', 
        //             'title', $doc[1], 
        //             'body', $doc[2]
        //         ]);
        //     } catch (\Throwable $e) {
        //         // Log the error and continue with the next document
        //         echo "Error adding document {$doc[0]}: {$e->getMessage()}\n";
        //     }
        // }
        // $redis->exec();
        // $result = $redis->hmget('movie:11002', ['title', 'rating']);
        // dd($result);

        // $streamKey = 'file_update_stream';
        // $consumerGroup = 'file_updates';
        // try {
        //     $redis->xgroup('CREATE', $streamKey, $consumerGroup, '$', true);
        // } catch (\Exception $e) {
        //     dd($e->getMessage());
        // }
        // $offset = 100;
        // $batchSize = 500; // Number of documents per batch
        // $allResults = [];

        // do {
        //     $batch = $redis->executeRaw(['FT.SEARCH', 'ihebsnewindex', '*', 'LANGUAGE',
        //     'english','LIMIT', $offset, $batchSize]);
        //     $totalResults = $batch[0];
        //     $documents = array_slice($batch, 1); 
        //     $allResults = array_merge($allResults, $documents);
        //     $offset += $batchSize;
        // } while (count($documents) > 0 && $offset < $totalResults);

        return new JsonResponse($results);
    }



    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    #[Route('/consume-group', methods: "GET", name: 'consumegroup')]
    public function ConsumeGroup(Request $request)
    {

        // if ($request->isMethod('get')) {
        $redis = new Client([
            'scheme' => 'tcp',
            'host'   => '172.18.0.2',
            'port'   => 6379,
        ]);
        $post = "I love coding with JavaScript";

        // Break the post into keywords (tokenization)
        $keywords = ["love", "coding", "JavaScript"];  // Simulating tokenization

        // Simulate Kafka "partitions" in Redis
        $partitions = [
            "love" => "partition_1",
            "coding" => "partition_2",
            "JavaScript" => "partition_3",
        ];

        // Post ID for this example (could be generated dynamically)
        $postId = 102;

        // Write to Redis partitions (Lists in this case)
        foreach ($keywords as $keyword) {
            // For each keyword, add the post ID to the corresponding partition (list)
            $redis->rpush($partitions[$keyword], $postId);
        }

        // Verify the data
        foreach ($partitions as $keyword => $partition) {
            $postIds = $redis->lrange($partition, 0, -1);
            dump("Post IDs for keyword '$keyword' in partition '$partition':\n");
        }
        die();
        //     $streamKey = 'file_update_stream';
        //     $consumerGroup = 'file_updates';
        //     $consumerName = 'consumeriheb10';
        //     $count = 1;
        //     $blockMs = 15000;
        //     try {
        //         $entries = $redis->xreadgroup(
        //             $consumerGroup,
        //             $consumerName,
        //             $count,
        //             $blockMs,
        //             false,
        //             $streamKey,
        //             ">"
        //         );
        //     } catch (\Exception $e) {
        //         dd("Error: " . $e->getMessage());
        //     }
    }




    #[Route('/fetchstream', methods: "GET", name: 'fetchstreams')]
    public function fetchstream(Request $request)
    {
        if ($request->isMethod('get')) {
            try {
                $redis = new Client([
                    'scheme' => 'tcp',
                    'host'   => '127.0.0.1',
                    'port'   => 6379,
                ]);
                // Define stream key and group
                $streamKey = 'file_update_stream';
                $searchIndexKey = 'file_update_index'; // For keyword indexing

                // Message data
                $messageData = [
                    'type' => 'update',
                    'details' => 'File updated successfully in redis',
                ];

                // Extract keywords for indexing
                $keywords = explode(' ', strtolower($messageData['details']));
                // Start a transaction
                $redis->multi();
                // Step 1: Add message to the stream
                $redis->xadd($streamKey, $messageData);
                //  $redis->exec();
                $resultOfxAdd = $redis->exec();
                // Step 2: Index keywords for full-text-like search 
                $redis->sadd($searchIndexKey, implode("", $resultOfxAdd));
                // Step 3: Execute the transaction

                echo ("Message added to stream and indexed successfully.\n");
                // Perform a search for a keyword
                $searchKeyword = 'file';
                $matchingIds = $redis->smembers($searchIndexKey);

                foreach ($matchingIds as $id) {
                    $message = $redis->xrange($streamKey, $id, $id);
                    dd($message);
                }
            } catch (\Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        return new JsonResponse(['message' => 'Transaction Passed Successfully']);
    }




    #[Route('/redis-api', name: 'app_demand')]
    public function RedisTest()
    {
        $redis = new Client([
            'scheme' => 'tcp',
            'host'   => '127.0.0.1',
            'port'   => 6379,
        ]);

        $streamKey = 'file_update_stream';
        $startId = '0';
        $endId = '+';
        $latestId = '1733822514490-0';
        $count = 1;
        $block = 1000;
        $entriesofredis = array();
        $entries = $redis->xrange($streamKey, $startId, $endId, $count);
        $entriesofredis = [];
        if ($entries !== null) {
            foreach ($entries as $entryId => $entryData) {
                $entriesofredis[] = [
                    'id' => $entryId,
                    'data' => $entryData
                ];
            }
        }

        return new JsonResponse($entriesofredis);
    }
}
