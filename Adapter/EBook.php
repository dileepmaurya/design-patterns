<?php

namespace App\Adapter;

use App\Adapter\EBookInterface;
/**
* 
*/
class EBook implements EBookInterface
{
	public function pressNext()
	{
		return 'EBook Press Next';
	}


	public function pressStart()
	{
		return 'EBook Press Start';
	}
}