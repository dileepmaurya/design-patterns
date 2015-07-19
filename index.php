<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

$loader = require "vendor/autoload.php";

use App\FileHandler;
use App\File\FileUpload;
use App\File\AmazonS3;

$h = new FileUpload();
$f = new FileHandler($h);
$f->upload();

/*
$r = new ReflectionClass('App\FileHandler');

echo '<pre>';
print_r(get_class_methods($r));

$c = $r->getConstructor();
print_r(get_class_methods($r->getConstructor()));
foreach($c->getParameters() as $p) {
  print_r(get_class_methods($p));
  print_r( $p->getClass()->isAbstract());
}
echo '</pre>';
*/
