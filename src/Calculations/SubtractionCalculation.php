<?php

declare(strict_types=1);

namespace App\Calculations;

class SubtractionCalculation implements CalculationInterface
{
    /**
     * @return string
     */
    public function getName() : string
    {
        return 'Subtraction';
    }

    /**
     * @param float $valueA
     * @param float $valueB
     *
     * @return float
     */
    public function calculate(float $valueA, float $valueB) : float
    {
        return $valueA - $valueB;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->getName();
    }
}
