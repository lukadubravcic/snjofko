<?php

use \Phalcon\Mvc\Model\Behavior\SoftDelete,
	\Phalcon\Mvc\Model\Validator,
	\Phalcon\Security;


class User extends BaseModel
{

	public function initialize()
	{
		// veza jedan naprema vise (user prema vise oglasa)
		// lokalno polje, referencirani model, referencirano polje
		$this->hasMany('id', 'Ad', 'user_id');

		$this->addBehavior(new SoftDelete([
			'field' => 'deleted',
			'value' => 1
		]));
	}

}