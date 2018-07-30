<?php

namespace App\Repository;

use App\Entity\CityManager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CityManager|null find($id, $lockMode = null, $lockVersion = null)
 * @method CityManager|null findOneBy(array $criteria, array $orderBy = null)
 * @method CityManager[]    findAll()
 * @method CityManager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CityManagerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CityManager::class);
    }

//    /**
//     * @return CityManager[] Returns an array of CityManager objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CityManager
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
