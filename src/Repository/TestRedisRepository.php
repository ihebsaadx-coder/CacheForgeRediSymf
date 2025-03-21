<?php

namespace App\Repository;

use App\Entity\TestRedis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TestRedis>
 *
 * @method TestRedis|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestRedis|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestRedis[]    findAll()
 * @method TestRedis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestRedisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestRedis::class);
    }

//    /**
//     * @return TestRedis[] Returns an array of TestRedis objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TestRedis
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
