<?php

namespace App\Repository;

use App\Entity\CarCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CarCategory>
 *
 * @method CarCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarCategory[]    findAll()
 * @method CarCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarCategory::class);
    }

    //    /**
    //     * @return CarCategory[] Returns an array of CarCategory objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?CarCategory
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
