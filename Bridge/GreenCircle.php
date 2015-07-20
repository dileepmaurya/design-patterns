<?php
namespace App\Bridge;

use App\Bridge\DrawAPI;

class GreenCircle implements DrawAPI
{
	public function draw($radius, $x, $y)
	{
		return 'Drawing green circle';
	}
}