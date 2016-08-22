<?php

class Routes extends \Phalcon\Mvc\Router\Group
{
	public function initialize()
	{

		$this->addGet('/api/ads', array(
        	'controller' => 'api',
        	'action'     => 'getAllAds',	
		));

		$this->addPost("/api/post", [
		        "controller" => "api",
		        "action"     => "postAd",
		]);
	}
}