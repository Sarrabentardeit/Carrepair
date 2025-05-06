<?php

namespace App\Form;

use App\Entity\Modele;
use App\Entity\Marque;
use App\Entity\Motorisation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModeleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du modèle',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('marque', EntityType::class, [
                'class' => Marque::class,
                'choice_label' => 'nom',
                'label' => 'Marque associée',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('motorisations', EntityType::class, [
                'class' => Motorisation::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => true, // Affiche des cases à cocher
                'label' => 'Motorisations Associées',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Modele::class,
        ]);
    }
}
