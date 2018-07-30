<?php

namespace App\Repository;

use App\Entity\AstroSun;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AstroSun|null find($id, $lockMode = null, $lockVersion = null)
 * @method AstroSun|null findOneBy(array $criteria, array $orderBy = null)
 * @method AstroSun[]    findAll()
 * @method AstroSun[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AstroSunRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AstroSun::class);
    }

//    /**
//     * @return AstroSun[] Returns an array of AstroSun objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AstroSun
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
