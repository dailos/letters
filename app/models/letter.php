<?php
class Letter extends AppModel {
	var $name = 'Letter';
	var $displayField = 'ref';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Attachment' => array(
			'className' => 'Attachment',
			'foreignKey' => 'letter_id',
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


	var $hasAndBelongsToMany = array(
		'Company' => array(
			'className' => 'Company',
			'joinTable' => 'companies_letters',
			'foreignKey' => 'letter_id',
			'associationForeignKey' => 'company_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Project' => array(
			'className' => 'Project',
			'joinTable' => 'letters_projects',
			'foreignKey' => 'letter_id',
			'associationForeignKey' => 'project_id',
			'unique' => true,
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

	function paginateCount($conditions = null, $recursive = 0, $extra = array()) {
    	$parameters = compact('conditions');
    	$this->recursive = $recursive;
    	$count = $this->find('count', array_merge($parameters, $extra));
    	if (isset($extra['group'])) {
        	$count = $this->getAffectedRows();
    	}
    	return $count;
	}
}
