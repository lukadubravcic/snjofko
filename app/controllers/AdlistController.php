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
		if ($this->session->get('role') == 'user') {
			$this->view->pick("adlist/index_user");

		} elseif ($this->session->get('role') == 'admin') {			
			$this->view->pick("adlist/index_admin");		
		}

		Tag::setTitle('Oglasi');
		$ads = Ad::findByCategory($category);		
		$this->view->setVar('ads',$ads);		
	}

	public function showallAction()
	{

		if ($this->session->get('role') == 'user') {
			$this->view->pick("adlist/showall_user");

		} elseif ($this->session->get('role') == 'admin') {			
			$this->view->pick("adlist/showall_admin");		
		}

		Tag::setTitle('Svi oglasi');
		$ads = Ad::find();	
		$this->view->setVar('ads',$ads);
		
	}

}

