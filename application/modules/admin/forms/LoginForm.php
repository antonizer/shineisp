<?php
class Admin_Form_LoginForm extends Zend_Form
{
    public function init()
    {
    	// Set the custom decorator
        $this->addElementPrefixPath('Shineisp_Decorator', 'Shineisp/Decorator/', 'decorator');
        $translate = Shineisp_Registry::get('Zend_Translate');
        
        $this->addElement('text', 'email', array(
            'filters'    => array('StringTrim', 'StringToLower'),
            'validators' => array(
                'EmailAddress',
            ),
            'decorators' => array('Bootstrap'),
            'required'   => true,
            'description'      => 'Write your own email',
            'label'      => $translate->_('Email'),
            'class'      => 'input-large'
        ));
        
        $this->addElement('password', 'password', array(
            'filters'    => array('StringTrim'),
            'validators' => array(
                array('regex', false, '/^[a-zA-Z0-9\-\_\.\%\!\$]{6,20}$/')
            ),
            'decorators' => array('Bootstrap'),
            'description'      => 'Write your own password',
            'required'   => true,
            'label'      => $translate->_('Password'),
            'class'      => 'input-large'
        ));

        $this->addElement('checkbox', 'rememberme', array(
            'label'    => $translate->_('Remember Me'),
            'decorators' => array('Bootstrap')
        ));

        $this->addElement('submit', 'login', array(
            'label'    => $translate->_('Login'),
            'decorators' => array('Bootstrap'),
        	'class'      => 'btn'
        ));
        
    }
}