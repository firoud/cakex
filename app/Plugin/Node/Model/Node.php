<?php
App::uses('NodeAppModel', 'Node.Model');
/**
 * Node Model
 *
 * @property User $User
 * @property Comment $Comment
 * @property Term $Term
 */
class Node extends NodeAppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'node_id',
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
		'Term' => array(
			'className' => 'Term',
			'joinTable' => 'nodes_terms',
			'foreignKey' => 'node_id',
			'associationForeignKey' => 'term_id',
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
        if (!empty($this->data[$this->alias]['title']) && empty($this->data[$this->alias]['slug'])) {
				
				
				$title = strtolower($this->data[$this->alias]['title']);
                $slug  = Inflector::slug($title, '-');
				
                $this->data[$this->alias]['slug'] = $slug;
    
        }

        return true;
    }	
	
	
/**
 * afterSave method
 *
 * @return boolean Always true
 */
    public function afterSave($created, $options = array()) {
		

        if (!empty($this->data[$this->alias]['tags'])) {
				
				
				$tags = explode(',' , $this->data[$this->alias]['tags']);
				
				foreach($tags as $tag){
					$tag = trim($tag);	
					
					if (!empty($tag)){
						
						$id = $this->Term->findByName($tag);
						
						if (empty($id)){
						
							$machine_name  = Inflector::slug(strtolower($tag), '-');
							
							App::import('Model', 'Taxonomy.Vocabulary');
							$vocabularyModel = new Vocabulary();
		                    $vocabulary = $vocabularyModel->find('first', array('conditions' => array( 'Vocabulary.machine_name' => 'tags')));
							
							$this->Term->create();
							$this->Term->save(array(
									'name' => $tag,
									'machine_name' => $machine_name,
									'parent_id' => NULL,
									'vocabulary_id' => $vocabulary['Vocabulary']['id'],
							
							));
							
							
							
							$this->NodesTerm->create();
							$this->NodesTerm->save(array(
									'node_id' => $this->id,
									'term_id' => $this->Term->getLastInsertId(),
							));
							
						
						} // if
						
						else {
							
							$this->NodesTerm->create();
							$this->NodesTerm->save(array(
									'node_id' => $this->id,
									'term_id' => $id['Term']['id'],
							));
							
						}
					   
					}  // if
					
					
				} // foreach
                 
				// debug($tags); die();
    
        }  // if

        return true;
    }	// function		
	

}
