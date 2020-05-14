<?php

namespace App\Repository;

use App\Entity\Userchauffeur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Userchauffeur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Userchauffeur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Userchauffeur[]    findAll()
 * @method Userchauffeur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserchauffeurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Userchauffeur::class);
    }

    // /**
    //  * @return Userchauffeur[] Returns an array of Userchauffeur objects
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
    public function findOneBySomeField($value): ?Userchauffeur
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
