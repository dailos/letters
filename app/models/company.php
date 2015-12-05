<?php
class Company extends AppModel {
	var $name = 'Company';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Letter' => array(
			'className' => 'Letter',
			'joinTable' => 'companies_letters',
			'foreignKey' => 'company_id',
			'associationForeignKey' => 'letter_id',
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

}
