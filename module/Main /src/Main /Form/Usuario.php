<?php

namespace Admin\Form;

use \Zend\Form\Form as Form;
use \Zend\Form\Element;

class Usuario extends Form
{
	
	public function __construct(\Doctrine\ORM\EntityManager $em)
	{
		parent::__construct('usuario');
		$this->setAttribute('action', '');
		$this->setAttribute('method', 'post');
		
		$this->add(
			array(
				'name' => 'id',
				'type' => 'hidden',
				)
			);
		
		$this->add(array(
			'name' => 'nome',
			'type' => 'text',
			'options' => array(
				'label' => 'Nome:'
				),
			'attributes' => array(
				'placeholder' => 'Informe o nome',
				'id' => 'nome'
				)
			));
		
		$this->add(array(
			'name' => 'sobrenome',
			'type' => 'text',
			'options' => array(
				'label' => 'Sobrenome:'
				),
			'attributes' => array(
				'placeholder' => 'Informe o sobrenome',
				'id' => 'sobrenome'
				)
			));
                
                
		
		$this->add(array(
			'name' => 'email',
			'type' => 'text',
			'options' => array(
				'label' => 'E-mail:'
				),
			'attributes' => array(
				'placeholder' => 'Informe o e-mail',
				'id' => 'email'
				)
			));
			
			$this->add(array(
			'name' => 'telefone',
			'type' => 'text',
			'options' => array(
				'label' => 'Telefone:'
				),
			'attributes' => array(
				'placeholder' => 'Informe o telefone',
				'id' => 'telefone'
				)
			));
		
		
		$this->add(array(
			'name' => 'senha',
			'type' => 'password',
			'options' => array(
				'label' => 'Senha:'
				),
			'attributes' => array(
				'placeholder' => 'Informe senha',
				'id' => 'senha'
				)
			));
                
                $this->add(array(
                    'name'=>'role',
                    'type' => 'select',
                    'options' => array(
                        'label' => 'perfil:*',
                        'value_options' => array('CATALOGADOR'=>'CATALOGADOR','ADMIN'=>'ADMIN')
                    ),
                    'attributes' => array(
                        'class' => 'form-control'
                    )
                ));
		
		$this->add(array(
			'type' => 'DoctrineModule\Form\Element\ObjectRadio',
			'name' => 'sexo',
			'options' => array(
				'disable_inarray_validator' => true,
				'label' => 'Sexo*',
				'object_manager' => $em,
				'target_class' => 'Admin\Model\Sexo',
				'property' => 'descSexo',
				'is_method' => true,
				'find_method' => array(
					'name' => 'findBy',
					'params' => array(
						'criteria' => array(),
						'orderBy' => array('desc_sexo' => 'ASC'),
						),
					),
				),
			));
		
		$this->add(array(
			'type' => 'DoctrineModule\Form\Element\ObjectMultiCheckbox',
			'name' => 'interesses',
			'options' => array(
				'disable_inarray_validator' => true,
				'label' => 'Interesses*',
				'object_manager' => $em,
				'target_class' => 'Admin\Model\Interesse',
				'property' => 'descInteresse',
				'is_method' => true,
				'find_method' => array(
					'name' => 'findBy',
					'params' => array(
						'criteria' => array(),
						'orderBy' => array('desc_interesse' => 'ASC'),
						),
					),
				),
			));
		
		$this->add(array(
			'name' => 'submit',
			'type' => 'submit',
			'attributes' => array(
				'value' => 'Salvar'
				)
			));
		
	}
	
}
?>