<?php

namespace App\Form;

use App\Entity\Product;
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
            ->add('nomImage', TextType::class, [
                'label' => 'Nom de l\'image',
                'required' => false,
            ])
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
    ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
