<?php
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
$name = 'img/graff/graff-'.mt_rand(1000000000, 9999999999).'.png';
$save = str_replace('data:image/png;base64,', '', $_POST['image']);
file_put_contents($name, base64_decode($save));

$imgNumb = substr($name, 16, 10);

$phpPage = 'fbshare/graff-'.$imgNumb.'.php';
$file = 'fbshare/graff-.php';
$basePage = file_get_contents($file);
file_put_contents($phpPage, $basePage);

// $cree = "CREEE";
// echo $cree;
echo $imgNumb;