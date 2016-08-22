<?php

use \Phalcon\Tag;

class ApiController extends \Phalcon\Mvc\Controller
{
	
	public function indexAction()
	{

	}


	public function getAllAdsAction()
	{
		$this->view->disable();
		$ads = Ad::find();
				
		$response = new \Phalcon\Http\Response();
		
	    $data = array();
	    foreach ($ads as $ad) {
	        $data[] = array(
	            'id' => $ad->id,
	            'user_id' => $ad->user_id,
	            'title' => utf8_encode($ad->title),
	            'category' => $ad->category,
	            'location' => utf8_encode($ad->location),
	            'description' => utf8_encode($ad->description),
	            'picture' => $ad->picture,
	            'price' => $ad->price,
	            'created_at' => $ad->created_at
	           
	        );
	    }
		$response->setJsonContent(json_encode($data));
		$response->send();
		
	}	

	public function postAdAction()
	{
		$this->view->disable();
		
		$user_email = $this->request->getPost('user_mail');
		$user_password = $this->request->getPost('user_password');
		$ad_title = $this->request->getPost('ad_title');
		$ad_category = $this->request->getPost('ad_category');
		$ad_location = $this->request->getPost('ad_location');
		$ad_description = $this->request->getPost('ad_description');
		$ad_picture = $this->request->getPost('ad_picture');
		$ad_price = $this->request->getPost('ad_price');

		$user = User::findFirstByEmail($user_email);

		if($user) {

			if ($this->security->checkHash($user_password, $user->password)) {
				
				$ad = new Ad();

				$ad->user_id = $user->id;
				$ad->title = $ad_title;
				$ad->category = $ad_category;
				$ad->location = $ad_location;
				$ad->description = $ad_description;

				// $ad->picture =
				$ad->price = $ad_price;
				$ad->save();

			}

		}
		
	}

}