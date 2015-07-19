<?php

namespace App\Adapter;

use App\Adapter\EBookInterface;

/**
* 
*/
class Kindle implements EBookInterface
{
	public function pressNext()
	{
		return 'Kindle Press Next';
	}


	public function pressStart()
	{
		return 'Kindle Press Start';
	}
}