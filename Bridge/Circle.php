<?php
namespace App\Bridge;

use App\Bridge\Shape;
use App\Bridge\DrawAPI;

class Circle extends Shape
{

	public function __construct($x, $y, $radius, DrawAPI $drawapi)
	{
		parent::__construct($x, $y, $radius, $drawapi);
	}

	public function draw()
	{
		return $this->drawapi->draw($this->radius, $this->x, $this->y);
	}
}