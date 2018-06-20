<?php

declare(strict_types=1);

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class CalculatorType extends AbstractType
{
    /**
     * @param FormBuilderInteface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('calculation', ChoiceType::class, [
                'choices' => $builder->getData()->getCalculations()
            ])
            ->add('valueA', NumberType::class)
            ->add('valueB', NumberType::class);
    }
}
