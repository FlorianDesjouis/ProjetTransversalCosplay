<?php

namespace DesguizeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends AbstractType{
	
	public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options){
   		$builder
   				->add('firstname')
   				->add('lastname')
   				->add('address')
   				->add('birthdate')
   				->add('postCode')
   				->add('town')
   				->add('phoneNumber')
   		;
	}

	public function getParent(){
		return 'fos_user_profile';
	}

	public function getName(){
		return 'des_user_profile';
	}
}