<?php

declare(strict_types=1);

namespace App\Data;

use App\Entity\CarCategory;

class SearchData
{
    private ?string $name = null;

    private ?CarCategory $carCategory = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): SearchData
    {
        $this->name = $name;
        return $this;
    }

    public function getCarCategory(): ?CarCategory
    {
        return $this->carCategory;
    }

    public function setCarCategory(?CarCategory $carCategory): SearchData
    {
        $this->carCategory = $carCategory;
        return $this;
    }
}