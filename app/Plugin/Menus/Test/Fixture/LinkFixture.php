<?php
/**
 * LinkFixture
 *
 */
class LinkFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = '_links';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'menu_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'path' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'enabled' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'expanded' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'weight' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'parent_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'lft' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'rght' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'menu_id' => '',
			'title' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'enabled' => 1,
			'expanded' => 1,
			'weight' => 1,
			'parent_id' => '',
			'lft' => '',
			'rght' => ''
		),
	);

}
