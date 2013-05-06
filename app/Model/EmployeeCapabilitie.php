<?php
App::uses('AppModel', 'Model');
/**
 * EmployeeCapabilitie Model
 *
 * @property Employee $Employee
 * @property Capacity $Capacity
 */
class EmployeeCapabilitie extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Capabilitie' => array(
			'className' => 'Capabilitie',
			'foreignKey' => 'capacity_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public function beforeSave($options = array()){
	  
	  $employeeId = $this->data['EmployeeCapabilitie']['employee_id'];
	  $capacityId = $this->data['EmployeeCapabilitie']['capacity_id'];
	  $hasEmployee = $this->find('list', array('conditions'=>array('employee_id'=> $employeeId,'capacity_id' => $capacityId)));
	    
	  if(!$hasEmployee){
	        return true;
	  }else{
	        return false;
	  }
	  
	}
	
	
}
