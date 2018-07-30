<?php

namespace App\Repository;

use App\Entity\Dungeons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Dungeons|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dungeons|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dungeons[]    findAll()
 * @method Dungeons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DungeonsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Dungeons::class);
    }

//    /**
//     * @return Dungeons[] Returns an array of Dungeons objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dungeons
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
