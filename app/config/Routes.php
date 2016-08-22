<?php

class Routes extends \Phalcon\Mvc\Router\Group
{
	public function initialize()
	{

		$this->addGet('/api/getads', [
        	'controller' => 'api',
        	'action'     => 'getAllAds',
		]);

		$this->addPost('/api/setad', [
		        'controller' => 'api',
		        'action'     => 'postAd'
		]);	

	}
}