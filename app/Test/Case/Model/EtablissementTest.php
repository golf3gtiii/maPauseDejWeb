<?php
App::uses('Etablissement', 'Model');

/**
 * Etablissement Test Case
 *
 */
class EtablissementTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.etablissement', 'app.photo', 'app.formule', 'app.etablissements_formule', 'app.paiement', 'app.etablissements_paiement');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Etablissement = ClassRegistry::init('Etablissement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Etablissement);

		parent::tearDown();
	}

}
