<?php
App::uses('AppModel', 'Model');
/**
 * PlatsPhoto Model
 *
 * @property Plat $Plat
 */
class PlatsPhoto extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
        
        
        /*var $actsAs = array(
            'MeioUpload' => array('name')
        );*/
        
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'plat_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Plat' => array(
			'className' => 'Plat',
			'foreignKey' => 'plat_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
