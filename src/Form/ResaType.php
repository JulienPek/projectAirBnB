<?php

namespace App\Form;

use App\Entity\Resa;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateArrivee', DateType::class, [
                'label' => 'Date d\'arrivée',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'js-datepicker',
                    'placeholder' => 'jj/mm/aaaa',
                ],
            ])
            ->add('dateDepart', DateType::class, [
                'label' => 'Date de départ',
                'widget' => 'single_text',
                // 'format' => 'dd/MM/yyyy',
                'attr' => [
                    'class' => 'js-datepicker',
                    'placeholder' => 'jj/mm/aaaa',
                ],
            ])
            ->add('nbreVoyageur', ChoiceType::class, [
                'label' => 'Nombre de voyageur',
                'choices' => [
                    'Voyageur 1' => 1,
                    'Voyageur 2' => 2,
                    'Voyageur 3' => 3,
                    'Voyageur 4' => 4,
                    'Voyageur 5' => 5,
                ],
                'attr' => [
                    'min' => 1,
                    'max' => 5,
                ],
            ])
            /* ->add('price', MoneyType::class, [
                'currency' => 'EUR',
                'html5' => true,
            ]) */

            ->add('price', TextType::class, [
                'label' => '2200 € / nuit ',  
            ])

            ->add('comments', TextType::class, [
                'label' => ' 5,0 · 3 Commentaires',
                'required' => false,
            ])

            ->add('envoyer', SubmitType::class, [
                'label' => 'Réserver',
                'attr' => [
                    'class' => 'btn btn-outline-danger w-100',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Resa::class,
        ]);
    }
}
