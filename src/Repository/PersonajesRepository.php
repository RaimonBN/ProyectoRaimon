<?php

namespace App\Repository;

use App\Entity\Personajes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Personajes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Personajes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Personajes[]    findAll()
 * @method Personajes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonajesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Personajes::class);
    }
    public function findByName($text): array
    {
        $qb = $this->createQueryBuilder('p')
        ->andWhere('p.nombre LIKE :text')
        ->setParameter('text','%'.$text.'%')
        ->getQuery();
        return $qb->execute();
    }

    // /**
    //  * @return Personajes[] Returns an array of Personajes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Personajes
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
