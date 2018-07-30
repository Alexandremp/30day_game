<?php

namespace App\Repository;

use App\Entity\TechnologyManager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TechnologyManager|null find($id, $lockMode = null, $lockVersion = null)
 * @method TechnologyManager|null findOneBy(array $criteria, array $orderBy = null)
 * @method TechnologyManager[]    findAll()
 * @method TechnologyManager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TechnologyManagerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TechnologyManager::class);
    }

//    /**
//     * @return TechnologyManager[] Returns an array of TechnologyManager objects
//     */
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
    public function findOneBySomeField($value): ?TechnologyManager
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
