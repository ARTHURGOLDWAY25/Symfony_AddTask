<?php

namespace App\Repository;

use App\Entity\TaskAdd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TaskAdd>
 *
 * @method TaskAdd|null find($id, $lockMode = null, $lockVersion = null)
 * @method TaskAdd|null findOneBy(array $criteria, array $orderBy = null)
 * @method TaskAdd[]    findAll()
 * @method TaskAdd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TaskAddRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TaskAdd::class);
    }

//    /**
//     * @return TaskAdd[] Returns an array of TaskAdd objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TaskAdd
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
