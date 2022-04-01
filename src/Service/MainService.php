<?php

declare(strict_types=1);

namespace App\Service;

use App\Model\CalculatorModel;

class MainService
{
    public function __construct(private Service1 $service1, private Service2 $service2)
    {
    }

    public function add(CalculatorModel $calculatorModel): int
    {
        return $calculatorModel->getA() + $calculatorModel->getB();
    }
}
