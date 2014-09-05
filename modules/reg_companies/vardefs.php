<?php

$dictionary['reg_companies'] = array(
	'table'=>'reg_companies',
	'audited'=>false,
	'duplicate_merge'=>true,
	'optimistic_locking'=>true,
	'unified_search'=>true,
  
	'fields'=>array (
    'type' => 
    array (
      'required' => false,
      'name' => 'type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Call',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'false',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'reg_companies_type_dom',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'name2' => 
    array (
      'required' => false,
      'name' => 'name2',
      'vname' => 'LBL_NAME2',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'name3' => 
    array (
      'required' => false,
      'name' => 'name3',
      'vname' => 'LBL_NAME3',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'nif' => 
    array (
      'required' => true,
      'name' => 'nif',
      'vname' => 'LBL_NIF',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'residence' => 
    array (
      'required' => false,
      'name' => 'residence',
      'vname' => 'LBL_RESIDENCE',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => '0',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'reg_companies_residence_dom',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'billing_address_city' => 
    array (
      'required' => false,
      'name' => 'billing_address_city',
      'vname' => 'LBL_ADDRESS_CITY',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
    ),
    'billing_address_state' => 
    array (
      'required' => false,
      'name' => 'billing_address_state',
      'vname' => 'LBL_ADDRESS_STATE',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
    ),
    'billing_address_postalcode' => 
    array (
      'required' => false,
      'name' => 'billing_address_postalcode',
      'vname' => 'LBL_ADDRESS_POSTALCODE',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 20,
      'size' => '20',
    ),
    'billing_address_country' => 
    array (
      'required' => false,
      'name' => 'billing_address_country',
      'vname' => 'LBL_ADDRESS_COUNTRY',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
    ),
    'billing_address_street' => 
    array (
      'required' => false,
      'name' => 'billing_address_street',
      'vname' => 'LBL_ADDRESS',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    
    'is_default' => array (
      'massupdate' => false,
      'name' => 'is_default',
      'vname' => 'LBL_IS_DEFAULT',
      'type' => 'bool',
    ),
    
  ),
  
	'relationships'=>array (
  ),
  
);

if (!class_exists('VardefManager')){
  require_once('include/SugarObjects/VardefManager.php');
}

VardefManager::createVardef('reg_companies','reg_companies', array('basic'));

$dictionary['reg_companies']['fields']['description']['vname']='LBL_CONDITIONS';
