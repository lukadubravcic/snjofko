<?php

use \Phalcon\Tag;

class LoginController extends BaseController
{
	
	public function onConstruct()
	{
		parent::initialize();		
		$this->assets->collection('other')->addCss('css/login.css');
	}	

	private function _createUserSession(User $user)
	{
		$this->session->set('id', $user->id);
		$this->session->set('role', $user->role);
		$this->session->set('logged_in', 1);
		$this->response->redirect("userpanel/index");
	}

	public function indexAction()
	{
		Tag::setTitle('Prijava');
	}

	public function dologinAction()
	{
		// Provjera CSRF tokena
		if ($this->security->checkToken() == false)
		{
			$this->flash->error('CSRF Token neispravan');
			$this->response->redirect('login/index');
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

		$this->flash->error('Krivi podaci za prijavu');
		$this->response->redirect('login/index');
	}

	public function destroySessionAction()
	{
		$this->session->destroy();
		$this->session->set('logged_in', 0);
	}

	public function registerAction()
	{
		Tag::setTitle('Registracija');
	}

	public function doRegisterAction()
	{
		$this->view->disable();

		if ($this->security->checkToken() == false)
		{
			$this->flash->error('CSRF Token neispravan');
			$this->response->redirect('login/register');
			return;
		}

		$name = $this->request->getPost('name');
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$confirm_password = $this->request->getPost('confirm_password');

		if ($password != $confirm_password) {
			$this->flash->error('Lozinke nisu jednake.');
			$this->response->redirect('login/register');
		}

		$user = new User();
		$user->name = $name;
		$user->role = 'user';
		$user->email = $email;
		$user->password = $this->security->hash($password);
		$result = $user->save();


		if (!$result) {
			$output = [];
			foreach ($user->getMessages() as $message) {
				$output[] = $message;
			}
			$output = implode(',', $output);
			$this->flash->error($output);
			$this->response->redirect('login/register');
			return;
		}

		if (!mkdir('images/'.$user->id, 0777)) {
		    $this->flash->error('Pogreska u kreiranju foldera');
		    $this->response->redirect('login/register');
			return;
		}

		$this->_createUserSession($user);
	}
}