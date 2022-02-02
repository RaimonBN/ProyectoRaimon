<?php

namespace App\Repository;

use App\Entity\Regiones;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Regiones|null find($id, $lockMode = null, $lockVersion = null)
 * @method Regiones|null findOneBy(array $criteria, array $orderBy = null)
 * @method Regiones[]    findAll()
 * @method Regiones[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegionesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Regiones::class);
    }

    // /**
    //  * @return Regiones[] Returns an array of Regiones objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Regiones
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
