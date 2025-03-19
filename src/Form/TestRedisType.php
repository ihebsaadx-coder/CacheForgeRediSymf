<?php

namespace App\Form;

use App\Entity\TestRedis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class TestRedisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $listPRepo = $options['listRepo'];
        $builder
            ->add('fileinputRedis', FileType::class,
                [
                    'property_path' => 'fileinputRedis',
                    'required' => false,
                    'data_class' => null,
                    'label_html' => false,
                    'label' => 'Pièce Jointe' ,
                    'attr' => [
                        'class' => 'fileinputRedis',
                        'placeholder' => 'Sélectionner un ou plusieurs fichier'
                    ]
                ])
                ->add('dropdownFast', ChoiceType::class, [
                    'label_html' => true,
                    'required' => true,
                    'label' => 'Code PFIN - Désignation <span class="text-danger">*</span>',
                    'choices' => array_merge(['' => ''], $listPRepo),
                    'choice_value' => function ($value) {
                        return $value;
                    },
                    'choice_label' => function ($value) {
                        return $value;
                    },
                ])

                ->add('ingenieurautocomplete', TextType::class, [
                    'label_html' => true,
                    'property_path' => 'ingenieurautocomplete',
                    'required' => false,
                    'label' =>  'Ingénieur projet '
                ])

                // ->add('dropdownFast', ChoiceType::class, [
                //     'label_html' => true,
                //     'required' => true,
                //     'label' => 'Code PFIN - Désignation <span class="text-danger">*</span>',
                //     'choices' => array_merge(['' => ''], $listPRepo),
                //     'choice_value' => function ($value) {
                //         return $value;
                //     },
                //     'choice_label' => function ($value) {
                //         return $value;
                //     },
                // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TestRedis::class,
            'listRepo' => array()
        ]);
    }
}
