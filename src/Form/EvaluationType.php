<?php

namespace App\Form;

use App\Entity\Evaluation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvaluationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*
        $builder
            ->add('date')
            ->add('name')
            ->add('star')
            ->add('recipe');
        */
        $builder
            ->add('name', TextType::class, ['label' => 'Votre nom'])
            ->add('star', IntegerType::class, ['label' => 'Saisissez votre note'])
            ->add('save', SubmitType::class, ['label' => 'Enregistrez votre √©valuation']);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evaluation::class,
        ]);
    }
}
