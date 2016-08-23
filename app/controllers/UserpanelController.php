	<?php

use \Phalcon\Tag;

class UserpanelController extends BaseController
{

	const FILE_PATH = 'images/'; // folder for storing user pictures

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
		Tag::setTitle('Korisnički prostor');
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

	public function saveAdAction()
	{
		$this->view->disable();

		$title = $this->request->getPost('title');
		$category = $this->request->getPost('category');
		$location = $this->request->getPost('location');
		$description = $this->request->getPost('description');
		$price = $this->request->getPost('price');
		$user_id = $this->session->get('id');
		
		
		$ad = new Ad();
		
		$ad->user_id = $user_id;
		$ad->title = $title;
		$ad->category = $category;
		$ad->location = $location;
		$ad->description = $description;

		// spremanje slike u folder i njezinog filepatha u odredeno polje

		$baseLocation = self::FILE_PATH.$user_id.'/';
		$file = new Phalcon\Http\Request\File($_FILES[picture]);
		$file->moveTo($baseLocation . $file->getName());		
		$ad->picture = $baseLocation.$file->getName();

		$ad->price = $price;		
		
		$result = $ad->save();

		if (!$result){
			$output = [];
			foreach ($user->getMessages() as $message) {
				$output[] = $message;
			}
			$output = implode(',', $output);
			$this->flash->error($output);
			$this->response->redirect('userpanel/createad');
			return;
		}

		$this->response->redirect('userpanel/');

	}

	public function getUsersAdsAction()
	{
		Tag::setTitle('Vasi oglasi');
		$id = $this->session->get('id');
		$ads = Ad::findByUser_id($id);	
		$this->view->setVar('ads',$ads);
	}

	public function deleteAdAction()
	{
		$action = $this->request->getPost('submit');
		$ad_id = $this->request->getPost('ad_id');
		$ad = Ad::findFirst($ad_id);

		if ($action == 'Brisanje'){			
			$ad->delete();			
		}

		if ($this->session->get('role') == 'admin') {
			$this->response->redirect('admin/');
		}else{
			$this->response->redirect('usepanel/');
		}

	}

}
