<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends Controller
{
     /**
      * @Route("/calculate")
      */
    public function calculateAction()
    {
        return $this->render('calculator/calculate.html.twig');
    }
}
