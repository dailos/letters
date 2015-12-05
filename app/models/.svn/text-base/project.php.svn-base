<?php
class Project extends AppModel {
	var $name = 'Project';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Letter' => array(
			'className' => 'Letter',
			'joinTable' => 'letters_projects',
			'foreignKey' => 'project_id',
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
