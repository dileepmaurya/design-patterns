<?php
namespace App\DependencyInjection;

use App\DependencyInjection\File\FileInterface;

class FileHandler
{
	protected $handler;

	public function __construct(FileInterface $handler)
	{
		$this->handler = $handler;
	}

	public function getHandler()
	{
		return $this->handler;
	}

	public function upload()
	{
		return $this->handler->upload();
	}
}