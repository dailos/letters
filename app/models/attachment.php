<?php
class Attachment extends AppModel {
	var $name = 'Attachment';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Letter' => array(
			'className' => 'Letter',
			'foreignKey' => 'letter_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
