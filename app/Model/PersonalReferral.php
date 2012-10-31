<?php
App::uses('AppModel', 'Model');
/**
 * PersonalReferral Model
 *
 * @property Candidate $Candidate
 */
class PersonalReferral extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'personal_referrals';

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
		'Candidate' => array(
			'className' => 'Candidate',
			'foreignKey' => 'candidate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
