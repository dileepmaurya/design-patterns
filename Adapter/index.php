<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

$loader = require "../vendor/autoload.php";

use App\Adapter\Book;
use App\Adapter\EBook;
use App\Adapter\EBookAdapter;
use App\Adapter\Kindle;



echo '------Book-----';
echo '<br/>';
$b = new Book();
echo $b->open();
echo '<br/>';
echo $b->turnpage();
echo '<br/>';

echo '-----EBook-----';
echo '<br/>';
$eb = new EBook();
$ea = new EBookAdapter($eb);
echo $ea->open();
echo '<br/>';
echo $ea->turnpage();
echo '<br/>';

echo '-----Kindle-----';
echo '<br/>';
$k = new Kindle();
$eak = new EBookAdapter($k);
echo $eak->open();
echo '<br/>';
echo $eak->turnpage();
echo '<br/>';

