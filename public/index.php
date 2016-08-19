<?php

try{
	
	//autoloader
	$loader = new \Phalcon\Loader();
	$loader->registerDirs([
		'../app/controllers/',
		'../app/models/',
		'../app/config/'
	]);

	$loader->register();

	$di = new \Phalcon\Di\FactoryDefault();

	//database
	$di->set('db', function(){
		$db = new \Phalcon\Db\Adapter\Pdo\Mysql([
			'host' => 'localhost',
			'username' => 'root',
			'password' => 'root',
			'dbname' => 'snjofko'
		]);
		return $db;
	}); 

	//view
	$di->set('view', function(){
		$view = new \Phalcon\Mvc\View();
		$view->setViewsDir('../app/view');
		$view->registerEngines(array(
			//'.phtml' => 'Phalcon\Mvc\View\Engine\Php',
			'.volt' => 'Phalcon\Mvc\View\Engine\Volt'
		));
		return $view;
	});

	// Base URI
	$di->set('url', function () {
        $url = new Phalcon\Mvc\Url();
        $url->setBaseUri('/snjofko/');
        return $url;
    });

	//Session
	$di->set('session', function() {
		$session = new \Phalcon\Session\Adapter\Files();
		$session->start();
		return $session;
	});

	//flash data (Temporary data)
	$di->set('flash', function() {
		$flash = new \Phalcon\Flash\Session([
				'error' => 'alert alert-danger',
				'success' => 'alert alert-success',
				'notice' => 'alert alert-info',
				'warning' => 'alert alert-warning'
			]);
		return $flash;
	});

	//meta-data
	$di['modelsMetadata'] = function() {

		//create a meta-data manager with APC
		$metaData = new \Phalcon\Mvc\Model\MetaData\Apc([
			"lifetime" => 86400,
			"prefix" => "metaData"
		]);
		return $metaData;
	};

	// Custom Dispatcher (Overrides the default)
	$di->set('dispatcher', function() use ($di){
		$eventsManager = $di->getShared('eventsManager');
		
		//Custom ACL class
		$permission = new Permission();
		
		// Listen for events from the permision class
		$eventsManager->attach('dispatch', $permission);

		$dispatcher = new \Phalcon\Mvc\Dispatcher();
		$dispatcher->setEventsManager($eventsManager);
		return $dispatcher;
	});
	
	
	$app = new \Phalcon\Mvc\Application($di);
	echo $app->handle()->getContent();

}catch(\Phalcon\Exception $e){
	echo $e->getMessage();
}