<?php
App::uses('Term', 'Taxonomy.Model');

/**
 * Term Test Case
 *
 */
class TermTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.taxonomy.term',
		'plugin.taxonomy.vocabulary',
		'plugin.taxonomy.node',
		'plugin.taxonomy.nodes_term'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Term = ClassRegistry::init('Taxonomy.Term');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Term);

		parent::tearDown();
	}

}
