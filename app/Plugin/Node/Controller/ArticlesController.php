<?php
App::uses('NodeAppController', 'Node.Controller');
/**
 * Nodes Controller
 *
 * @property Node $Node
 * @property PaginatorComponent $Paginator
 */
class ArticlesController extends NodeAppController {
	


/**
 * Use
 *
 * @var array
 */
	public $uses = array('Node.Node', 'Taxonomy.Vocabulary' ,'Taxonomy.Term' , 'Taxonomy.NodesTerm');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	

/**
 * Components
 *
 * @var array
 */	
	
	public $paginate = array(
			'conditions' => array('Node.type' => 'article' , 'Node.status' => 1),
			'limit' => 2,
			'order' => array(
				'Node.sticky' => 'desc',			
				'Node.created' => 'desc'
			)
		);	

/**
 * beforeFilter method
 *
 */

	public function beforeFilter() {
	
	     
            parent::beforeFilter();
			
			$this->set('screen_icon', 'pencil');	
			
	}	
	
	

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Node->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		
		$this->set('nodes', $this->Paginator->paginate());
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Node->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		$options = array('conditions' => array('Node.' . $this->Node->primaryKey => $id), 'recursive' => 1);
		
		$node = $this->Node->find('first', $options);

		$catVocabulary = $this->Vocabulary->find('first', array('conditions' => array( 'Vocabulary.machine_name' => 'categories')));
        $tagVocabulary = $this->Vocabulary->find('first', array('conditions' => array( 'Vocabulary.machine_name' => 'tags')));	
		
			
		$categories = $this->Node->Term->find('list', array( 'conditions' => array( 'Term.vocabulary_id' => $catVocabulary['Vocabulary']['id']) ));
		$nodesTerm = $this->NodesTerm->find('all',  array( 'conditions' => array( 'NodesTerm.node_id' => $id ) ));
		
		$tags = array();
		
		foreach($nodesTerm as $term){
			
				$first = $this->Term->find('first', array( 'conditions' => array( 
				                    'Term.id' => $term['NodesTerm']['term_id'], 
									 'Term.vocabulary_id' =>  $tagVocabulary['Vocabulary']['id']
									) ) );
				
				if (!empty($first)){
					
					$tags[] = $first;
					}
				
			}		
				

		$this->set( compact('node', 'categories', 'tags') );
		
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		
		$this->Node->recursive = 0;

		
		
		/**********************  FILTER  ************************/
			
        if(isset($this->request->query['status'])) {
			
			switch($this->request->query['status']){


				case 'status-1':
			    $this->Paginator->settings['conditions']['Node.status'] =  1;
				break;	
				
				case 'status-0':
			    $this->Paginator->settings['conditions']['Node.status'] =  0;
				break;
				
				case 'promote-1':
			    $this->Paginator->settings['conditions']['Node.promote'] =  1;
				break;	
				
				case 'promote-0':
			    $this->Paginator->settings['conditions']['Node.promote'] =  0;
				break;
				
				case 'sticky-1':
			    $this->Paginator->settings['conditions']['Node.sticky'] =  1;
				break;	
				
				case 'sticky-0':
			    $this->Paginator->settings['conditions']['Node.sticky'] =  0;
				break;									
				
			}
			

			
		}			
			
			
		
		$this->Paginator->settings['conditions']['Node.type'] =  'article';
		$this->Paginator->settings['limit'] =  20;
		$this->Paginator->settings['order'] =  array(
												'Node.created' => 'desc'
											    );
		
		
		$nodes = $this->Paginator->paginate();
	    $title_for_layout = __('Content');
		$this->set(compact('nodes' , 'title_for_layout'));
		
		
		
		/**********************  UPDATE ************************/
		
		if ($this->request->is('post')) {
			
			if ( isset($this->request->data['operation']) && isset($this->request->data['nodes']) ){
				
				switch( $this->request->data['operation'] ) {
					
					/**********************  DELETE ************************/
					
					case 'delete':
					
					foreach( $this->request->data['nodes'] as $node ){
						
						$this->Node->delete($node);	
						
					}
					
				    $this->Session->setFlash('<div class="alert alert-success">' . __('Deleted %s posts.' , count($this->request->data['nodes'])) . '</div>');
				    return $this->redirect(array('action' => 'index'));
					

					break;	
					
					
					/**********************  PUBLISH ************************/
					
					case 'publish':
					
					foreach( $this->request->data['nodes'] as $node ){
						
						$this->Node->id = $node;
						$this->Node->saveField('status', 1);							
						
					}
					
				    $this->Session->setFlash('<div class="alert alert-success">' . __('The update has been performed.') . '</div>');
				    return $this->redirect(array('action' => 'index'));
					

					break;	
					
					
					
					/**********************  UNPUBLISH ************************/
					
					case 'unpublish':
					
					foreach( $this->request->data['nodes'] as $node ){
						
						$this->Node->id = $node;
						$this->Node->saveField('status', 0);							
						
					}
					
				    $this->Session->setFlash('<div class="alert alert-success">' . __('The update has been performed.') . '</div>');
				    return $this->redirect(array('action' => 'index'));
					

					break;	
					
					
					
					
					
					/**********************  PROMOTE ************************/
					
					case 'promote':
					
					foreach( $this->request->data['nodes'] as $node ){
						
						$this->Node->id = $node;
						$this->Node->saveField('promote', 1);							
						
					}
					
				    $this->Session->setFlash('<div class="alert alert-success">' . __('The update has been performed.') . '</div>');
				    return $this->redirect(array('action' => 'index'));
					

					break;											
					
					
				
					
					
					/**********************  DEMOTE ************************/
					
					case 'demote':
					
					foreach( $this->request->data['nodes'] as $node ){
						
						$this->Node->id = $node;
						$this->Node->saveField('promote', 0);							
						
					}
					
				    $this->Session->setFlash('<div class="alert alert-success">' . __('The update has been performed.') . '</div>');
				    return $this->redirect(array('action' => 'index'));
					

					break;											
				
					
					
					/**********************  STICKY ************************/
					
					case 'sticky':
					
					foreach( $this->request->data['nodes'] as $node ){
						
						$this->Node->id = $node;
						$this->Node->saveField('sticky', 1);							
						
					}
					
				    $this->Session->setFlash('<div class="alert alert-success">' . __('The update has been performed.') . '</div>');
				    return $this->redirect(array('action' => 'index'));
					

					break;						
					
					
					
					/**********************  UNSTICKY ************************/
					
					case 'unsticky':
					
					foreach( $this->request->data['nodes'] as $node ){
						
						$this->Node->id = $node;
						$this->Node->saveField('sticky', 0);							
						
					}
					
				    $this->Session->setFlash('<div class="alert alert-success">' . __('The update has been performed.') . '</div>');
				    return $this->redirect(array('action' => 'index'));
					

					break;	
					
					
									
														
					
				} // switch
				
				
						
						
			}
			

			}
	}


/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			
			$this->Node->create();
			if ($this->Node->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success">' . __('The article has been saved.') . '</div>');
				return $this->redirect(array('action' => 'edit' , $this->Node->getLastInsertId()));
			} else {
				$this->Session->setFlash('<div class="alert alert-danger">' . __('The article could not be saved. Please, try again.') . '</div>');
			}
			
		}
		$title_for_layout = __('Add content');	
		$users = $this->Node->User->find('list', array('fields' => array('User.id', 'User.username')));
		
		$this->loadModel('Vocabulary');
		$vocabulary = $this->Vocabulary->find('first', array('conditions' => array( 'Vocabulary.machine_name' => 'categories')));
		$terms = $this->Node->Term->find('list', array( 'conditions' => array( 'Term.vocabulary_id' => $vocabulary['Vocabulary']['id']) ));		
		$this->set(compact('users', 'terms', 'title_for_layout'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Node->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Node->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success">' . __('The article has been saved.') . '</div>');
				//return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('<div class="alert alert-danger">' . __('The article could not be saved. Please, try again.') . '</div>');
			}
		} else {
			$options = array('conditions' => array('Node.' . $this->Node->primaryKey => $id));
			$this->request->data = $this->Node->find('first', $options);
		}
		$title_for_layout = __('Content');	
		$users = $this->Node->User->find('list', array('fields' => array('User.id', 'User.username')));

		$this->loadModel('Vocabulary');
		$catVocabulary = $this->Vocabulary->find('first', array('conditions' => array( 'Vocabulary.machine_name' => 'categories')));
		$tagVocabulary = $this->Vocabulary->find('first', array('conditions' => array( 'Vocabulary.machine_name' => 'tags')));	
		
			
		$terms = $this->Node->Term->find('list', array( 'conditions' => array( 'Term.vocabulary_id' => $catVocabulary['Vocabulary']['id']) ));
		$nodesTerm = $this->NodesTerm->find('all',  array( 'conditions' => array( 'NodesTerm.node_id' => $id ) ));
		
		$tags = array();
		
		foreach($nodesTerm as $term){
			
				$first = $this->Term->find('first', array( 'conditions' => array( 
				                    'Term.id' => $term['NodesTerm']['term_id'], 
									 'Term.vocabulary_id' =>  $tagVocabulary['Vocabulary']['id']
									) ) );
				
				if (!empty($first)){
					
					$tags[] = $first['Term']['name'];
					
					}
				
			}		
		
				
		$this->set(compact('users', 'terms','tags', 'title_for_layout'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Node->id = $id;
		if (!$this->Node->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		$this->request->allowMethod('get', 'delete');
		if ($this->Node->delete()) {
			$this->Session->setFlash('<div class="alert alert-success">' . __('The article has been deleted.') . '</div>');
		} else {
			$this->Session->setFlash('<div class="alert alert-danger">' . __('The article could not be deleted. Please, try again.') . '</div>');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
