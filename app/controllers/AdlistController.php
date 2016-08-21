<?php

class AdlistController extends BaseController
{

	public function onConstruct()
	{
		parent::initialize();
	}

	public function indexAction()
	{
		 $ads = Ad::find();
		 $this->view->setVar('ads', $ads);		
	}



}



