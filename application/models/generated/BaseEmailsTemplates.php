<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('EmailsTemplates', 'doctrine');

/**
 * BaseEmailsTemplates
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $template_id
 * @property enum $type
 * @property string $code
 * @property string $name
 * @property string $cc
 * @property string $bcc
 * @property boolean $plaintext
 * @property boolean $active
 * @property Doctrine_Collection $EmailsTemplatesData
 * @property Doctrine_Collection $Products
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmailsTemplates extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('emails_templates');
        $this->hasColumn('template_id', 'integer', 5, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '5',
             ));
        $this->hasColumn('type', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'products',
              1 => 'domains',
              2 => 'supports',
              3 => 'general',
              4 => 'invoices',
              5 => 'affiliates',
              6 => 'customers',
              7 => 'orders',
             ),
             ));
        $this->hasColumn('code', 'string', 150, array(
             'type' => 'string',
             'length' => '150',
             ));
        $this->hasColumn('name', 'string', 150, array(
             'type' => 'string',
             'length' => '150',
             ));
        $this->hasColumn('cc', 'string', 150, array(
             'type' => 'string',
             'length' => '150',
             ));
        $this->hasColumn('bcc', 'string', 150, array(
             'type' => 'string',
             'length' => '150',
             ));
        $this->hasColumn('plaintext', 'boolean', 25, array(
             'type' => 'boolean',
             'default' => '0',
             'length' => '25',
             ));
        $this->hasColumn('active', 'boolean', 25, array(
             'type' => 'boolean',
             'default' => '1',
             'length' => '25',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('EmailsTemplatesData', array(
             'local' => 'template_id',
             'foreign' => 'template_id'));

        $this->hasMany('Products', array(
             'local' => 'template_id',
             'foreign' => 'welcome_mail_id'));
    }
}