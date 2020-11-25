<?php

namespace App\Form;

use App\Entity\Recette;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class RecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, [
                "label" =>"Nom de la recette",
                "required" => false
            ])
            ->add('resume', TextType::class, [
                "label" => "Résumé de la recette",
                "required" => false
            ])
            ->add('preparation', TextareaType::class, [
                "label" => "Etapes de préparation",
                "required" => false,
                "attr" => [
                    "rows" => 8
                ]
            ])
            ->add('temps', TextType::class, [
                "required" => false,
                "attr" => [
                    "placeholder" => "00h00m"
                ]
            ])
            ->add('personne', NumberType::class, [
                "required" => false
            ])
            ->add('categorie', EntityType::class, [
                "label" => "Catégorie",
                "class" => Categorie::class,
                "choice_label" => "nom" //propriété "nom" de la catégorie. Automatisation, si jamais on rajouter une cat. en bdd
            ])
            ->add('imageFile', FileType::class, [
                "label" =>"Image de la recette",
                "required" => false
            ])
            //->add('createdAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Recette::class,
        ]);
    }
}
