<?php

namespace App\Repository;

use App\Entity\Galaxy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Galaxy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Galaxy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Galaxy[]    findAll()
 * @method Galaxy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GalaxyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Galaxy::class);
    }

//    /**
//     * @return Galaxy[] Returns an array of Galaxy objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Galaxy
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
