<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Factory\CarCategoryFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CarCategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        CarCategoryFactory::createMany(10);

        $manager->flush();
    }
}
