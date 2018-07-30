<?php

namespace App\Repository;

use App\Entity\BuildingManager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BuildingManager|null find($id, $lockMode = null, $lockVersion = null)
 * @method BuildingManager|null findOneBy(array $criteria, array $orderBy = null)
 * @method BuildingManager[]    findAll()
 * @method BuildingManager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BuildingManagerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BuildingManager::class);
    }

//    /**
//     * @return BuildingManager[] Returns an array of BuildingManager objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BuildingManager
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
