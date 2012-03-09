<?php
/**
 * PlatFixture
 *
 */
class PlatFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'cuisine_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'ingredient_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'historique' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'date_debut' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'date_fin' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'formule_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'cuisine_id' => array('column' => array('cuisine_id', 'ingredient_id', 'formule_id'), 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'cuisine_id' => 1,
			'ingredient_id' => 1,
			'historique' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'date_debut' => '2012-03-09',
			'date_fin' => '2012-03-09',
			'formule_id' => 1
		),
	);
}
