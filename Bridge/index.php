<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

$loader = require "../vendor/autoload.php";

use App\Bridge\Circle;
use App\Bridge\RedCircle;
use App\Bridge\GreenCircle;

$rc = new Circle(2, 3, 5, new RedCircle());
echo $rc->draw();
echo '<br/>';

$gc = new Circle(2, 3, 5, new GreenCircle());
echo $gc->draw();

