<?php

declare(strict_types=1);

namespace App\Controller;

use App\Calculations\AdditionCalculation;
use App\Calculations\SubtractionCalculation;
use App\Entity\CalculatorEntity;
use App\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends Controller
{
    /**
     * @Route("/calculate")
     *
     * @return Response
     */
    public function calculateAction(Request $request) : Response
    {
        $calculation = null;
        $calculatorEntity = (new CalculatorEntity())
            ->addCalculation(new AdditionCalculation())
            ->addCalculation(new SubtractionCalculation());

        $form = $this->createForm(CalculatorType::class, $calculatorEntity);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calculation = $calculatorEntity->getCalculation()->calculate(
                $calculatorEntity->getValueA(),
                $calculatorEntity->getValueB()
            );
        }

        return $this->render('calculator/calculate.html.twig', [
            'form' => $form->createView(),
            'calculation' => $calculation
        ]);
    }
}
