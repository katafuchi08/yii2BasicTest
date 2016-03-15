<?php

namespace app\odels;

use yii\base\Model;

class EntryForm extend Model
{
	public $name;
	public $email;

	public function rules()
	{
		return [
			[['name', 'email'], 'required'],
			['email', 'email'],
		];
	}
}





