<?php

use \Phalcon\Tag;

class UserpanelController extends BaseController
{
	public function onConstruct()
	{
		parent::initialize();
	}	

	public function indexAction()
	{
		Tag::setTitle('Login');
		echo 'nesto';
	}

}