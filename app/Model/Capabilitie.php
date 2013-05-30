<?php
App::uses('AppModel', 'Model');
/**
 * Capabilitie Model
 *
 * @property Type $Type
 * @property Employee $Employee
 */
class Capabilitie extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name_capabicity';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CapabicityType' => array(
			'className' => 'CapabicityType',
			'foreignKey' => 'type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Employee' => array(
			'className' => 'Employee',
			'joinTable' => 'employee_capabilities',
			'foreignKey' => 'capacity_id',
			'associationForeignKey' => 'employee_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
