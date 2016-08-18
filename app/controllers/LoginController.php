<?php

use \Phalcon\Tag;

class LoginController extends BaseController
{
	
	public function onConstruct()
	{
		parent::initialize();
	}	

	private function _createUserSession(User $user)
	{
		$this->session->set('id', $user->id);
		$this->session->set('role', $user->role);
		$this->response->redirect("index/");
		// TODO
	}

	public function indexAction()
	{
		Tag::setTitle('Login');
		$this->assets->collection('other')->addCss('css/login.css');
	}

	public function dologinAction()
	{
		// Provjera CSRF tokena
		if ($this->security->checkToken() == false)
		{
			$this->flash->error('Invalid CSRF Token');
			$this->response->redirect('signin/index');
			return;
		}

		$this->view->disable();		

		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$user = User::findFirstByEmail($email);

		if($user) {
			if ($this->security->checkHash($password, $user->password)) 
			{
				$this->_createUserSession($user);
				return;
			}
		}

		$this->flash->error('Incorrect Credentials');
		$this->response->redirect('login/index');
	}

	public function destroySessionAction()
	{
		$this->session->destroy();
	}

	public function registerAction()
	{
		Tag::setTitle('Registration');
		//$this->assets->collection('other')->addCss()
	}
}