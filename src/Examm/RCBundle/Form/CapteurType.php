<?php

namespace Examm\RCBundle\Form;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CapteurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('RCSF',EntityType::class,array(
                'class'=>'ExammRCBundle:RCSF',
                'choice_label'=>'type',
                'multiple'=>false,
                'label'=> "Type de RCSF"
            ))
            ->add('XCoordonne',TextType::class,array(
                'label'=>"x"
            ))
            ->add('YCoordonne',TextType::class,array(
                'label'=>"y"
            ))
            ->add('Ajouter',SubmitType::class);
            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Examm\RCBundle\Entity\Capteur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'examm_rcbundle_capteur';
    }


}
