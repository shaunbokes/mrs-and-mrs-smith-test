<?php

declare(strict_types=1);

namespace App\Entity;

use App\Calculations\CalculationInterface;

class CalculatorEntity
{
    protected $calculations = [];
    protected $calculation = null;
    protected $valueA = 0.0;
    protected $valueB = 0.0;

    /**
     * @return array
     */
    public function getCalculations() : array
    {
        return $this->calculations;
    }

    /**
     * @param CalculationInterface $calculation
     * @return CalculatorEntity
     */
    public function addCalculation(CalculationInterface $calculation) : CalculatorEntity
    {
        $this->calculations[$calculation->getName()] = $calculation;

        return $this;
    }

    /**
     * @param CalculationInterface $calculation
     * @return CalculatorEntity
     */
    public function removeCalculation(CalculationInterface $calculation) : CalculatorEntity
    {
        unset($this->calculations[$calculation->getName()]);

        return $this;
    }

    /**
     * @return CalculationInterface
     */
    public function getCalculation() : ?CalculationInterface
    {
        return $this->calculation;
    }


    /**
     * @param CalculationInterface $calculation
     *
     * @return CalculatorEntity
     */
    public function setCalculation(CalculationInterface $calculation) : CalculatorEntity
    {
        $this->calculation = $calculation;

        return $this;
    }

    /**
     * @return float
     */
    public function getValueA() : float
    {
        return $this->valueA;
    }

    /**
     * @param float $valueA
     * @return CalculatorEntity
     */
    public function setValueA(float $valueA) : CalculatorEntity
    {
        $this->valueA = $valueA;

        return $this;
    }

    /**
     * @return float
     */
    public function getValueB() : float
    {
        return $this->valueB;
    }

    /**
     * @param float $valueB
     * @return CalculatorEntity
     */
    public function setValueB(float $valueB) : CalculatorEntity
    {
        $this->valueB = $valueB;

        return $this;
    }
}
