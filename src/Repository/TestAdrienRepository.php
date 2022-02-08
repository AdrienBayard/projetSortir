<?php

namespace App\Repository;

use App\Entity\TestAdrien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TestAdrien|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestAdrien|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestAdrien[]    findAll()
 * @method TestAdrien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestAdrienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestAdrien::class);
    }

    // /**
    //  * @return TestAdrien[] Returns an array of TestAdrien objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TestAdrien
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
