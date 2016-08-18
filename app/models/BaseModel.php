<?php


class BaseModel extends \Phalcon\Mvc\Model
{
	public function initialize()
	{
		
	}

	public function beforeCreate()
	{
		$this->created_at = date('Y-m-d H:i:s');
	}

}
