<?php

use \Phalcon\Tag;

class IndexController extends BaseController
{
	
	public function onConstruct()
	{
		parent::initialize();
		// $this->session->set('logged_in', 0);
	}

	public function indexAction()
	{
		Tag::setTitle('Početna');
		if ($this->session->get('logged_in') == 1) {
			$this->response->redirect('userpanel/index');
		}		
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

	public function aboutAction()
	{
		Tag::setTitle('O nama');
	}
}