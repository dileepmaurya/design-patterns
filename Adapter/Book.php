<?php
namespace App\Adapter;

use App\Adapter\BookInterface;
/**
* 
*/
class Book implements BookInterface
{
	public function open()
	{
		return 'Book Open';
	}

	public function turnpage()
	{
		return 'Book Turn Page';
	}
}