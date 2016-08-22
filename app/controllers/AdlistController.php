<?php 

use \Phalcon\Tag;

class AdlistController extends BaseController
{

	public function onConstruct()
	{
		parent::initialize();
	}

	public function indexAction($category)
	{
		Tag::setTitle('Oglasi');

		$ads = Ad::findByCategory($category);		
		$this->view->setVar('ads',$ads);		
	}

	public function showallAction()
	{
		Tag::setTitle('Svi oglasi');
		$ads = Ad::find();		
		$this->view->setVar('ads',$ads);		
	}

}

