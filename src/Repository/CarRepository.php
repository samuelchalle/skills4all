<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Car;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Car>
 *
 * @method Car|null find($id, $lockMode = null, $lockVersion = null)
 * @method Car|null findOneBy(array $criteria, array $orderBy = null)
 * @method Car[]    findAll()
 * @method Car[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Car::class);
    }

    public function findSearch(SearchData $search): array
    {
        $query = $this
            ->createQueryBuilder('car');

        if (!empty($search->getName())) {
            $query = $query
                ->andWhere('car.name LIKE :name')
                ->setParameter('name', "%{$search->getName()}%");
        }

        if (!empty($search->getCarCategory())) {
            $query = $query
                ->andWhere('car.carCategory = :category')
                ->setParameter('category', $search->getCarCategory());
        }

        $query = $query->orderBy('car.name', 'DESC');

        return $query->getQuery()->getResult();
    }
}
