<?php

declare(strict_types=1);

namespace App\Model;

class CalculatorModel
{
    private int $a;
    private int $b;

    public function getA(): int
    {
        return $this->a;
    }

    public function setA(int $a): self
    {
        $this->a = $a;

        return $this;
    }

    public function getB(): int
    {
        return $this->b;
    }

    public function setB(int $b): self
    {
        $this->b = $b;

        return $this;
    }
}
