<?php
namespace App\Bridge;

use App\Bridge\DrawAPI;

class RedCircle implements DrawAPI
{
	public function draw($radius, $x, $y)
	{
		return 'Drawing red circle';
	}
}