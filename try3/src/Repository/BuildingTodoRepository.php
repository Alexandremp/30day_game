<?php

namespace App\Repository;

use App\Entity\BuildingTodo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BuildingTodo|null find($id, $lockMode = null, $lockVersion = null)
 * @method BuildingTodo|null findOneBy(array $criteria, array $orderBy = null)
 * @method BuildingTodo[]    findAll()
 * @method BuildingTodo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BuildingTodoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BuildingTodo::class);
    }

//    /**
//     * @return BuildingTodo[] Returns an array of BuildingTodo objects
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
    public function findOneBySomeField($value): ?BuildingTodo
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
