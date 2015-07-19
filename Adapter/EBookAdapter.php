<?php
namespace App\Adapter;

use App\Adapter\BookInterface;

/**
* 
*/
class EBookAdapter implements BookInterface
{
	private $ebook;
	
	public function __construct(EBookInterface $ebook)
	{
		$this->ebook = $ebook;
	}

	public function open()
	{
		return $this->ebook->pressStart();
	}

	public function turnpage()
	{
		return $this->ebook->pressNext();
	}
}