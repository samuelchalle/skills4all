<?php

namespace App\Factory;

use App\Entity\Car;
use App\Repository\CarRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Car>
 *
 * @method        Car|Proxy                     create(array|callable $attributes = [])
 * @method static Car|Proxy                     createOne(array $attributes = [])
 * @method static Car|Proxy                     find(object|array|mixed $criteria)
 * @method static Car|Proxy                     findOrCreate(array $attributes)
 * @method static Car|Proxy                     first(string $sortedField = 'id')
 * @method static Car|Proxy                     last(string $sortedField = 'id')
 * @method static Car|Proxy                     random(array $attributes = [])
 * @method static Car|Proxy                     randomOrCreate(array $attributes = [])
 * @method static CarRepository|RepositoryProxy repository()
 * @method static Car[]|Proxy[]                 all()
 * @method static Car[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Car[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Car[]|Proxy[]                 findBy(array $attributes)
 * @method static Car[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Car[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 *
 */
final class CarFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getDefaults(): array
    {
        return [
            'carCategory' => CarCategoryFactory::random(),
            'cost' => self::faker()->randomFloat(0, 5000, 60000),
            'name' => self::faker()->word(),
            'nbDoors' => self::faker()->numberBetween(2, 5),
            'nbSeats' => self::faker()->numberBetween(2, 5),
        ];
    }

    protected function initialize(): self
    {
        return $this;
    }

    protected static function getClass(): string
    {
        return Car::class;
    }
}
