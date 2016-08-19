<?php

use \Phalcon\Tag;

class UserpanelController extends BaseController
{

	private $_AREAS = [
				'Bjelogorsko-bilogorska',
				'Brodsko-posavska',
				'Dubrovačko-neretvanska',
				'Istarska',
				'Karlovačka',
				'Koprivničko-križevačka',
				'Krapinsko-zagorska',			
				'Ličko-Senjska',		
				'Međimurska',
				'Osječko-baranjska',			
				'Požeško-slavonska',
				'Primorsko-goranska',
				'Sisačko-moslavačka',		
				'Splitsko-dalmatinska',
				'Šibensko-kninska',	
				'Varaždinska',	
				'Virovitičko-podravska',	
				'Vukovarsko-srijemska',
				'Zadarska',
				'Grad Zagreb',
				'Zagrebačka'
	];

	private $_CATEGORIES = [
				'Auto-Moto',
				'Nekretnine',
				'Usluge',
				'Elektronika',
				'Audio-Video',
				'Sjekire'
	];

	public function onConstruct()
	{
		parent::initialize();
	}	

	public function indexAction()
	{
		Tag::setTitle('Login');
	}

	public function signoutAction()
	{
		$this->session->destroy();
		$this->response->redirect('index/');
	}

	public function createAdAction()
	{
		Tag::setTitle('Objava oglasa');
		$this->view->setVars([
			'areas' => $this->_AREAS,
			'categories' => $this->_CATEGORIES
			]);		
	}

	public function saveAdd()
	{
		
	}

}

