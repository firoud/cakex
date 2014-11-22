<?php
App::uses('TaxonomyAppModel', 'Taxonomy.Model');
/**
 * Term Model
 *
 * @property Term $ParentTerm
 * @property Vocabulary $Vocabulary
 * @property Term $ChildTerm
 * @property Node $Node
 */
class Term extends TaxonomyAppModel {

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
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'weight' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
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
		'ParentTerm' => array(
			'className' => 'Term',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Vocabulary' => array(
			'className' => 'Vocabulary',
			'foreignKey' => 'vocabulary_id',
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
		'ChildTerm' => array(
			'className' => 'Term',
			'foreignKey' => 'parent_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Node' => array(
			'className' => 'Node',
			'joinTable' => 'nodes_terms',
			'foreignKey' => 'term_id',
			'associationForeignKey' => 'node_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
	
	
	
	
	
	
/**
 * beforeSave method
 *
 * @return boolean Always true
 */
    public function beforeSave($options = array()) {
        if (!empty($this->data[$this->alias]['name']) && empty($this->data[$this->alias]['machine_name'])) {
				
				
				$name = strtolower($this->data[$this->alias]['name']);
                $machine_name  = Inflector::slug($name, '-');
				
                $this->data[$this->alias]['machine_name'] = $machine_name;
    
        }

        return true;
    }	
	

}
