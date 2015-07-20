<?php
namespace App\Bridge;

use App\Bridge\DrawAPI;

abstract class Shape
{
	protected $drawapi;
	protected $x;
	protected $y;
	protected $radius;

	public function __construct($x, $y, $radius, DrawAPI $drawapi)
	{
		$this->drawapi = $drawapi;
		$this->x = $x;
		$this->y = $y;
		$this->radius = $radius;
	}

	public abstract function draw();
}