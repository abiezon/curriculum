<?php
App::uses('AppModel', 'Model');
/**
 * Candidate Model
 *
 * @property Role $Role
 * @property Acquirement $Acquirement
 * @property Course $Course
 * @property Experience $Experience
 * @property Language $Language
 */
class Candidate extends AppModel {
	public $actsAs = array('Search.Searchable');
	
	public $filterArgs = array(
	            array('name' => 'name', 'type' => 'query', 'method' => 'filterName')	            
	        );
	
	public function filterName($data, $field = null) {
         	if (empty($data['name'])) {
              return array();
          }
          $nameField = '%' . $data['name'] . '%';
          return array(
              'OR' => array(
                  $this->alias . '.name LIKE' => $nameField,
                  ));
      }

	// public function isOwnedBy($candidate, $user) {
	// 	    return $this->field('id', array('id' => $candidate, 'user_id' => $user)) === $candidate;
	// 	}

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'role_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Selecione uma opção',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'rule-2' =>array(
				'rule' => array('minLength', 8),
				'message' => 'Tamanho mínimo de 8 caracteres'
			),
		),
		// 'email' => array(
		// 		        'isUnique' => array (
		// 		            'rule' => 'isUnique',
		// 		            'message' => 'Este endereço de email já foi cadastrado.'),
		// 		        'valid' => array (
		// 		            'rule' => array('email', false),
		// 		            'message' => 'Email inválido.'),        
		// 				'allowEmpty' => true,	
		// 		    ),
		'cpf'=> array(
				'rule' => '/[0-9]{11}$/i',
				'message' => 'Preencha o campo (CPF) corretamente',
				'allowEmpty' => true,
		 ),
		'rg'=> array(
				'rule' => '/[0-9]{5,}$/i',
				'message' => 'Preencha o campo (RG) corretamente',
				'allowEmpty' => true,
		 ),
		'state'=> array(
				'rule' => array('notempty'),
				'message'=>'Selecione o estado'				
		 ),
		'gender' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Selecione uma opção'				
			),
		),
		'schooling' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Selecione uma opção'				
			),
		),
		'city' => array(
			'notempty' => array(
				'rule' => array('notempty')								
			),
		),
		
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Acquirement' => array(
			'className' => 'Acquirement',
			'foreignKey' => 'candidate_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Course' => array(
			'className' => 'Course',
			'foreignKey' => 'candidate_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Experience' => array(
			'className' => 'Experience',
			'foreignKey' => 'candidate_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Language' => array(
			'className' => 'Language',
			'foreignKey' => 'candidate_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PersonalReferral' => array(
			'className' => 'PersonalReferral',
			'foreignKey' => 'candidate_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Objective' => array(
			'className' => 'Objective',
			'foreignKey' => 'candidate_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	); 
	
	// public function beforeSave(){
	//         $this->data['Candidate']['phone'] = str_replace("-","",str_replace("(","",str_replace(")","",$this->data['Candidate']['phone'])));
	//         debug($this->data['Candidate']['phone']); die();
	//         return true;
	//     }   

}
