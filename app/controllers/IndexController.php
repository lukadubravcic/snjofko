<?php

use \Phalcon\Tag;

class IndexController extends BaseController
{
	
	public function onConstruct()
	{
		parent::initialize();
	}

	public function indexAction()
	{
		Tag::setTitle('Home');			
	}

	// test samo za generiranje password hasha
	public function hashPassAction($pass)
	{
		echo $this->security->hash($pass);
	}

	public function signoutAction()
	{
		$this->session->destroy();
		$this->response->redirect('index/');
	}
}