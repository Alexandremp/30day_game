<?php

namespace App\Repository;

use App\Entity\UserManager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UserManager|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserManager|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserManager[]    findAll()
 * @method UserManager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserManagerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UserManager::class);
    }

//    /**
//     * @return UserManager[] Returns an array of UserManager objects
//     */
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
    public function findOneBySomeField($value): ?UserManager
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
