<?php

namespace App\DependencyInjection\File;

/**
* Normal php file upload
*/

class FileUpload implements FileInterface
{
	public function upload()
	{
		echo "file upload on file sytem";
	}
}