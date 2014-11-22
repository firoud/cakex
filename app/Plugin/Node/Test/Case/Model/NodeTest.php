<?php
App::uses('Node', 'Node.Model');

/**
 * Node Test Case
 *
 */
class NodeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.node.node',
		'plugin.node.user',
		'plugin.node.comment',
		'plugin.node.term',
		'plugin.node.nodes_term'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Node = ClassRegistry::init('Node.Node');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Node);

		parent::tearDown();
	}

}
