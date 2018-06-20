<?php

declare(strict_types=1);

namespace App\Calculations;

interface CalculationInterface
{
    /**
     * @return string
     */
    public function getName() : string;

     /**
      * @param float $valueA
      * @param float $valueB
      *
      * @return float
      */
     public function calculate(float $valueA, float $valueB) : float;
}
