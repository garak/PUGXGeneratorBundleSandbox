<?php

namespace Garak\SandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserFilterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('firstName', 'filter_text')
            ->add('lastName', 'filter_text')
            ->add('email', 'filter_text')
            ->add('active', 'filter_boolean')
            ->add('lastLogin', 'filter_date')
            ->add('birthday', 'filter_date')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'        => 'Garak\SandboxBundle\Entity\User',
            'csrf_protection'   => false,
            'validation_groups' => array('filter'),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'user_filter';
    }
}
