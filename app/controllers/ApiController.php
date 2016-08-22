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
		
	}

}