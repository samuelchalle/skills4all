<?php

namespace App\Factory;

use App\Entity\CarCategory;
use App\Repository\CarCategoryRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<CarCategory>
 *
 * @method        CarCategory|Proxy                     create(array|callable $attributes = [])
 * @method static CarCategory|Proxy                     createOne(array $attributes = [])
 * @method static CarCategory|Proxy                     find(object|array|mixed $criteria)
 * @method static CarCategory|Proxy                     findOrCreate(array $attributes)
 * @method static CarCategory|Proxy                     first(string $sortedField = 'id')
 * @method static CarCategory|Proxy                     last(string $sortedField = 'id')
 * @method static CarCategory|Proxy                     random(array $attributes = [])
 * @method static CarCategory|Proxy                     randomOrCreate(array $attributes = [])
 * @method static CarCategoryRepository|RepositoryProxy repository()
 * @method static CarCategory[]|Proxy[]                 all()
 * @method static CarCategory[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static CarCategory[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static CarCategory[]|Proxy[]                 findBy(array $attributes)
 * @method static CarCategory[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static CarCategory[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class CarCategoryFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getDefaults(): array
    {
        return [
            'name' => self::faker()->word(),
        ];
    }

    protected function initialize(): self
    {
        return $this
        ;
    }

    protected static function getClass(): string
    {
        return CarCategory::class;
    }
}
