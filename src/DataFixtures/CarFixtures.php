<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Factory\CarFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CarFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        CarFactory::createMany(100);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            CarCategoryFixtures::class,
        ];
    }

}
