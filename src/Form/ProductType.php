<?php

namespace App\Form;

use App\Entity\Marque;
use App\Entity\Modele;
use App\Entity\Motorisation;
use App\Entity\Product;
use App\Entity\SubCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType; // Add this use statement at the top
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Champs Produit
            ->add('nom', TextType::class, [
                'label' => 'Nom du Produit',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['max' => 100]),
                ],
            ])
            ->add('prix', null, [
                'label' => 'Prix (DT)',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Positive(),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description du Produit',
                'required' => false,
            ])
            ->add('quantiteEnStock', IntegerType::class, [
                'label' => 'Quantité en Stock',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\PositiveOrZero(),
                ],
            ])
            ->add('dateAjout', DateTimeType::class, [
                'label' => 'Date d\'Ajout',
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('subCategory', EntityType::class, [
                'class' => SubCategory::class,
                'choice_label' => 'name', // Le champ à afficher dans le menu déroulant
                'label' => 'Sous-catégorie',
                'attr' => ['class' => 'form-control']
            ])
            // Champs SEO
            ->add('seoTitre', TextType::class, [
                'label' => 'Titre SEO',
                'required' => false,
                'constraints' => [
                    new Assert\Length(['max' => 60]),
                ],
            ])
            ->add('seoDescription', TextareaType::class, [
                'label' => 'Meta Description',
                'required' => false,
                'constraints' => [
                    new Assert\Length(['max' => 160]),
                ],
            ])
            ->add('slug', TextType::class, [
                'label' => 'Slug URL',
                'required' => false,
            ])
            ->add('motsCles', TextType::class, [
                'label' => 'Mots-clés (séparés par des virgules)',
                'required' => false,
            ])
            ->add('textePromotion', TextareaType::class, [
                'label' => 'Texte Promotionnel',
                'required' => false,
            ])
            ->add('indexable', CheckboxType::class, [
                'label' => 'Indexable par les moteurs de recherche',
                'required' => false,
            ])
            ->add('canonicalUrl', TextType::class, [
                'label' => 'URL Canonique',
                'required' => false,
            ])

            // Champs Image

            ->add('texteAlternatif', TextType::class, [
                'label' => 'Texte alternatif de l\'image',
                'required' => false,
            ])
            ->add('titreImage', TextType::class, [
                'label' => 'Titre de l\'image',
                'required' => false,
            ])

            ->add('descriptionImage', TextareaType::class, [
                'label' => 'Description de l\'image',
                'required' => false,
            ])


            ->add('image', FileType::class, [
        'label' => 'Image du produit',
        'mapped' => false, // Ne pas mapper directement à l'entité
        'required' => false,
        'constraints' => [
            new Assert\File([
                'mimeTypes' => ['image/jpeg', 'image/png'],
                'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG ou PNG)',
            ])
        ],
    ])

            ->add('marque', EntityType::class, [
                'class' => Marque::class,
                'choice_label' => 'nom',
                'placeholder' => 'Sélectionnez une marque',
                'mapped' => false, // Non mappé à l'entité `Product`
                'attr' => ['class' => 'form-control select-marque'],
            ])
            ->add('modele', EntityType::class, [
                'class' => Modele::class,
                'choice_label' => 'nom',
                'placeholder' => 'Sélectionnez un modèle',
                'mapped' => false, // Non mappé à l'entité `Product`
                'attr' => ['class' => 'form-control select-modele'],
            ])
            ->add('motorisations', EntityType::class, [
                'class' => Motorisation::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => false,
                'placeholder' => 'Sélectionnez des motorisations',
                'attr' => ['class' => 'form-control select-motorisations'],
            ])

        ;


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
