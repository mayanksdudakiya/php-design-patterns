<?php

declare(strict_types=1);

interface CarService {
    public function getCost():int;
}

class BasicInspection implements CarService 
{
    public function getCost():int
    {
        return 15;
    }
}

class OilChange implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost():int
    {
        return $this->carService->getCost() + 25;
    }
}

class TireRotation implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost():int
    {
        return $this->carService->getCost() + 35;
    }
}

echo (new TireRotation(new OilChange(new BasicInspection())))->getCost();