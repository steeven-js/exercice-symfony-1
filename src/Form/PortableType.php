<?php

namespace App\Form;

use App\Entity\Portable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PortableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('price')
            ->add('marque')
            ->add('modele')
            ->add('os')
            ->add('pocesseur')
            ->add('memoire')
            ->add('graphisme')
            ->add('affichage')
            ->add('stockage')
            ->add('communication')
            ->add('equipement')
            ->add('connectique')
            ->add('couleur')
            ->add('dimension')
            ->add('poid')
            ->add('submit', SubmitType::class, [
                'label' => "Validez ma commande",
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Portable::class,
        ]);
    }
}
