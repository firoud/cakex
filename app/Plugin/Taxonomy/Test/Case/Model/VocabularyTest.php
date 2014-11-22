<?php
App::uses('Vocabulary', 'Taxonomy.Model');

/**
 * Vocabulary Test Case
 *
 */
class VocabularyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.taxonomy.vocabulary',
		'plugin.taxonomy.term'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vocabulary = ClassRegistry::init('Taxonomy.Vocabulary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vocabulary);

		parent::tearDown();
	}

}
