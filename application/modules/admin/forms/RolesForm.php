<?php
class Admin_Form_RolesForm extends Zend_Form
{
    
    public function init()
    {
        // Set the custom decorator
        $this->addElementPrefixPath('Shineisp_Decorator', 'Shineisp/Decorator/', 'decorator');
        $translate = Shineisp_Registry::get('Zend_Translate');
        
        $this->addElement('text', 'name', array(
        		'filters'     => array('StringTrim'),
	            'decorators'  => array('Composite'),
        		'required'    => true,
	            'label'       => $translate->_('Role Name'),
	            'description' => $translate->_('Write here the name of the role in lowercase'),
	            'class'       => 'input-large'
        ));
        
        $this->addElement('multiselect', 'users', array(
            'decorators'  => array('Composite'),
            'label'       => $translate->_('Users'),
            'class'       => 'input-large'
        ));
        
        $this->getElement('users')
					        ->setAllowEmpty(false)
					        ->setRegisterInArrayValidator(false)
					        ->setMultiOptions(AdminUser::getList());
        
        $this->addElement('hidden', 'role_id');

    }
    
}