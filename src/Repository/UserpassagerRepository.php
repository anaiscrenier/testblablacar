<?php

namespace App\Repository;

use App\Entity\Userpassager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Userpassager|null find($id, $lockMode = null, $lockVersion = null)
 * @method Userpassager|null findOneBy(array $criteria, array $orderBy = null)
 * @method Userpassager[]    findAll()
 * @method Userpassager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserpassagerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Userpassager::class);
    }

    // /**
    //  * @return Userpassager[] Returns an array of Userpassager objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Userpassager
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
