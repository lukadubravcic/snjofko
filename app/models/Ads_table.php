<?php

use \Phalcon\Mvc\Model\Behavior\SoftDelete,
	\Phalcon\Mvc\Model\Validator,
	\Phalcon\Security;


class User extends BaseModel
{

	public function initialize()
	{
		// veza prema user tablici
		$this->belongsTo('user_id', 'User', 'id');

		$this->addBehavior(new SoftDelete([
			'field' => 'deleted',
			'value' => 1
		]));
	}

}