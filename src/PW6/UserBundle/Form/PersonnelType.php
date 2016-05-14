<?php

namespace PW6\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class PersonnelType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fname',      TextType::class)
            ->add('pname',      TextType::class)
            ->add('birth',      DateType::class, array('widget'=>'single_text'))
            ->add('sex',        CheckboxType::class, array('required' => false))
            ->add('contrat',    CheckboxType::class, array('required' => false))
            ->add('time',       NumberType::class)
            ->add('salary',     NumberType::class)
            ->add('superieur',  TextType::class)
            ->add('save',       SubmitType::class, array('label'=>'Ajouter cet employé'));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PW6\UserBundle\Entity\Personnel'
        ));
    }
}
