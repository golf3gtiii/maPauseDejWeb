<?php
App::uses('Plat', 'Model');

/**
 * Plat Test Case
 *
 */
class PlatTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.plat', 'app.cuisine', 'app.ingredient', 'app.formule', 'app.photo', 'app.plats_photo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Plat = ClassRegistry::init('Plat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Plat);

		parent::tearDown();
	}

}
