<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullname',TextType::class,['required' => false,'attr' => ['class' => 'form-control']])
            ->add('age',TextType::class,['required' => false,'attr' => ['class' => 'form-control']])
            ->add('cin',TextType::class,['required' => false,'attr' => ['class' => 'form-control']])
            ->add('adress',TextType::class,['required' => false,'attr' => ['class' => 'form-control']])
            ->add('phone',TextType::class,['required' => false,'attr' => ['class' => 'form-control']])
            ->add('description',TextareaType::class,['required' => false,'attr' => ['class' => 'form-control']])
            ->add('source',FileType::class,[
                'attr' => ['class' => 'form-control'],
                'label' => 'Document',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '310094k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF/IMAGE/DOCS document',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
