<?php

namespace App\Repository;

use App\Entity\TELETRAVAIL;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TELETRAVAIL>
 *
 * @method TELETRAVAIL|null find($id, $lockMode = null, $lockVersion = null)
 * @method TELETRAVAIL|null findOneBy(array $criteria, array $orderBy = null)
 * @method TELETRAVAIL[]    findAll()
 * @method TELETRAVAIL[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TELETRAVAILRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TELETRAVAIL::class);
    }

    public function save(TELETRAVAIL $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TELETRAVAIL $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TELETRAVAIL[] Returns an array of TELETRAVAIL objects
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

//    public function findOneBySomeField($value): ?TELETRAVAIL
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
