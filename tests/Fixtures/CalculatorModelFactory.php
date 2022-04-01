<?php

declare(strict_types=1);

namespace App\Tests\Fixtures;

use App\Model\CalculatorModel;

class CalculatorModelFactory
{


    public static function create(array $data = []): CalculatorModel
    {
        $data = array_merge(self::getDefault(), $data);

        return (new CalculatorModel())->setA($data['a'])->setB($data['b']);
    }

    public static function getDefault(): array
    {
        return [
            'a' => 1,
            'b' => 2,
        ];
    }
}
