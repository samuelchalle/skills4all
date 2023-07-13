<?php

declare(strict_types=1);

namespace App\Form;

use App\Data\SearchData;
use App\Entity\CarCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => ['placeholder' => 'Nom du véhicule'],
            ])
            ->add('carCategory', EntityType::class, [
                'label' => false,
                'required' => false,
                'class' => CarCategory::class,
                'expanded' => false,
                'multiple' => false,
                'placeholder' => 'Sélectionner une catégorie',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SearchData::class,
        ]);
    }
}
