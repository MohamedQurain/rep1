<?php

namespace VoitureBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoitureType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('immatricule',TextType::class,array('disabled' => true))
            ->add('marque',TextType::class,array('disabled' => true))
            ->add('dateDebut')
            ->add('dateFin')
            /*->add('', ChoiceType::class, array(
                'choices' => array('oui' => true, 'non' => flase),
                'expanded' => true,
                'multiple' => false
            ))*/
            ->add('', CheckboxType::class, array(
                'label'    => 'Show this entry publicly?',
                'required' => false,
            ))
            ->add('Chauffeur',EntityType::class,array(
                'class'=>'VoitureBundle:Chauffeur',
                'choice_label'=>'prenom',
                'multiple'=>false
            ))
            ->add('Ajout',SubmitType::class);


    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VoitureBundle\Entity\Voiture'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'voiturebundle_voiture';
    }


}
