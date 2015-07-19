<?php

namespace App\File;

/**
* Amazons3 php file upload
*/

class AmazonS3 implements FileInterface
{
	public function upload()
	{
		echo "file upload on amazon s3 server";
	}
}