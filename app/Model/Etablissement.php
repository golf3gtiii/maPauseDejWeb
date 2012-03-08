<?php
App::uses('AppModel', 'Model');
/**
 * Etablissement Model
 *
 * @property Photo $Photo
 * @property Formule $Formule
 * @property Paiement $Paiement
 */
class Etablissement extends AppModel {
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
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Entrez le nom de votre établissement',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'adresse' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Entrez l\'adresse de votre établissement',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ville' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Entrez la ville de votre établissement',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'code_postal' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Entrez le code postal de votre établissement',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'telephone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Entrez le téléphone de votre établissement',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'phone' => array(
				'rule' => array('phone'),
				'message' => 'Le numéro n\'est pas correct',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'descriptif' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Entrez un description de votre établissement',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'places_assises' => array(
			'numeric' => array(
				//'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'site_internet' => array(
			
			'url' => array(
				'rule' => array('url'),
				'message' => 'L\'url n\'est pas valide. Elle doit être du type http://www.example.com.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'facebook' => array(
			
			'url' => array(
				'rule' => array('url'),
				'message' => 'L\'url n\'est pas valide. Elle doit être du type http://www.example.com.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'twitter' => array(
			
			'url' => array(
				'rule' => array('url'),
				'message' => 'L\'url n\'est pas valide. Elle doit être du type http://www.example.com.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Photo' => array(
			'className' => 'Photo',
			'foreignKey' => 'etablissement_id',
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
		'Formule' => array(
			'className' => 'Formule',
			'joinTable' => 'etablissements_formules',
			'foreignKey' => 'etablissement_id',
			'associationForeignKey' => 'formule_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Paiement' => array(
			'className' => 'Paiement',
			'joinTable' => 'etablissements_paiements',
			'foreignKey' => 'etablissement_id',
			'associationForeignKey' => 'paiement_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
