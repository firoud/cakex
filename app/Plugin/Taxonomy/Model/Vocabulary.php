<?php
App::uses('TaxonomyAppModel', 'Taxonomy.Model');
/**
 * Vocabulary Model
 *
 * @property Term $Term
 */
class Vocabulary extends TaxonomyAppModel {

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
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Term' => array(
			'className' => 'Term',
			'foreignKey' => 'vocabulary_id',
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
