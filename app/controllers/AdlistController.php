<?php

class AdlistController extends BaseController
{

	public function onConstruct()
	{
		parent::initialize();
	}

	public function indexAction()
	{
		$this->view->setVars([
			'all' => User::find()
		]);
		
	}

}