<?php

namespace App\Repository;

use App\Entity\LandMass;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LandMass|null find($id, $lockMode = null, $lockVersion = null)
 * @method LandMass|null findOneBy(array $criteria, array $orderBy = null)
 * @method LandMass[]    findAll()
 * @method LandMass[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LandMassRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LandMass::class);
    }

//    /**
//     * @return LandMass[] Returns an array of LandMass objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LandMass
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
