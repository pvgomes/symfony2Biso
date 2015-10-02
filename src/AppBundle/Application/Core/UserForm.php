<?php

namespace AppBundle\Application\Core;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class UserForm
 *
 * @author Thiago Ribeiro
 */
class UserForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name','text')
            ->add('username', 'text')
            ->add('password','password')
            ->add('seller','entity', ['class' => 'AppBundle\Infrastructure\Core\Seller','choice_label' => 'name'])
            ->add('userRole','entity', [
                    'class' => 'AppBundle\Infrastructure\Core\UserRole',
                    'choice_label' => 'description',
                    'multiple' => true,
                    'expanded' => true
                ]
            );
    }

    public function getName()
    {
        return 'loadProduct';
    }
}