<?php

use Phalcon\Mvc\Dispatcher,
	Phalcon\Events\Event,
	Phalcon\Acl;

class Permission extends \Phalcon\Mvc\User\Plugin
{

	const GUEST = 'guest';
	const USER = 'user';
	const ADMIN = 'admin';

	protected $_publicResources = [
		'index' => ['*'],
		'login' => ['*'],
		'adlist' => ['*'],
		'api' => ['*']
	];

	protected $_userResources = [
		'userpanel' => ['*']
	];
	
	protected $_adminResources = [
		'admin' => ['*']
	];


	public function beforeExecuteRoute(Event $event, Dispatcher $dispatcher)
	{

		$role = $this->session->get('role');
		if(!$role)
		{
			$role = self::GUEST;
		}
			
		// Get the current controller/action from the dispatcher
		$controller = $dispatcher->getControllerName();
		$action = $dispatcher->getActionName();

		// Get the ACL Rule List
		$acl = $this->_getAcl();
		$allowed = $acl->isAllowed($role, $controller, $action);
		
		
		// See if they have permission
		if($allowed != Acl::ALLOW)
		{
			$this->flash->error("UNAUTHORIZED ACCESS");
			$this->response->redirect('index');

			// Stops the dispatcher at the current operation
			return false;
		}
	}


	protected function _getAcl()
	{	

		if (!isset($this->persistent->acl))
		{			
			
			$acl = new Acl\Adapter\Memory();
			$acl->setDefaultAction(Phalcon\Acl::DENY);

			$roles = [
				self::GUEST => new Acl\Role(self::GUEST),
				self::USER  => new Acl\Role(self::USER),
				self::ADMIN => new Acl\Role(self::ADMIN),
			];


			foreach ($roles as $role) {
				$acl->addRole($role);
			}

			// Public Resources
			foreach ($this->_publicResources as $resource => $action) 
			{
				$acl->addResource(new Acl\Resource($resource), $action);

			}

			// User Resources
			foreach ($this->_userResources as $resource => $action) 
			{
				$acl->addResource(new Acl\Resource($resource), $action);

			}

			// Admin Resources
			foreach ($this->_adminResources as $resource => $action) 
			{
				$acl->addResource(new Acl\Resource($resource), $action);

			}

			// Allow all roles to access the Public Resources
			foreach ($roles as $role)
			{
				foreach ($this->_publicResources as $resource => $actions) {
					$acl->allow($role->getName(), $resource, '*');					
				}
			}
			
			// Allow User and Admin to access User Resources
			foreach ($this->_userResources as $resource => $actions) 
			{
				foreach($actions as $action)
				{
					$acl->allow(self::USER, $resource, $action);
					$acl->allow(self::ADMIN, $resource, $action);
				}
			}

			// Allow Admin to access the Admin Resources
			foreach ($this->_adminResources as $resource => $actions) 
			{
				foreach($actions as $action)
				{
					$acl->allow(self::ADMIN, $resource, $action);
				}
			}

			$this->persistent->acl = $acl;
		}

		return $this->persistent->acl;
	}

}