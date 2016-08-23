<?php

use \Phalcon\Tag;

// Admin credentials:
// email: admin@admin
// password: admin

class AdminController extends BaseController
{
	
	public function onConstruct()
	{
		parent::initialize();
	}

	public function indexAction()
	{
		Tag::setTitle('Admin');	
	}

	public function getUsersAction()
	{
		Tag::setTitle('Korisnici');
		$users = User::find();
		$this->view->setVar('users', $users);
		
		
	}

}
