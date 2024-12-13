<?php

namespace App\Form;

use App\Entity\Appointment;
use App\Entity\Vehicle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $options['user'];

        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom complet',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('phone', TelType::class, [
                'label' => 'Téléphone',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('date', DateTimeType::class, [
                'label' => 'Date et Heure',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('service', ChoiceType::class, [
                'label' => 'Service Demandé',
                'choices' => [
                    'Réparation' => 'Car Repair',
                    'Peinture' => 'Car Paint',
                    'Nettoyage' => 'Car Wash'
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('vehicule', EntityType::class, [
                'class' => Vehicle::class,
                'query_builder' => function ($repository) use ($user) {
                    return $repository->createQueryBuilder('v')
                        ->where('v.proprietaire = :user')
                        ->setParameter('user', $user);
                },
                'choice_label' => 'modele',
                'placeholder' => 'Sélectionnez un véhicule',
                'label' => 'Véhicule',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);

        $resolver->setDefined(['user']); // Déclare l'option `user`
    }
}
