<?php

namespace fl\flopupBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder->add('username', 'text')
                ->add('email', 'email')
                ->add('password', 'password')
                ->add('submit', 'submit');

    }
    public function getName(){
        return 'user';
    }
}