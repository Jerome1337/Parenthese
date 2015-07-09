<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// SAVE GRAFF IMAGE
$name = 'img/graff/graff-'.mt_rand(1000000000, 9999999999).'.png';
$save = str_replace('data:image/png;base64,', '', $_POST['image']);
file_put_contents($name, base64_decode($save));

// SAVE NEW GRAFF PAGE
$imgNumb = substr($name, 16, 10);

$phpPage = 'fbshare/graff-'.$imgNumb.'.php';
$file = 'fbshare/graff-.php';
$basePage = file_get_contents($file);
file_put_contents($phpPage, $basePage);

// $cree = "CREEE";
// echo $cree;
echo $imgNumb;

// ADD CONTENT TO SITEMAP
// $xml = new DOMDocument('1.0', 'utf-8');
// $xml->formatOutput = true; 
// $xml->preserveWhiteSpace = false;
// $xml->load('sitemap.xml');

// $url = $xml->createElement('url');
// $loc = $xml->createElement('loc');
// $loc->appendChild('http://bicravart.com/fbshare/graff-'.$imgNumb.'.php');
// $freq = $xml->createElement('changefreq');
// $freq->appendChild('never');


// $url->appendChild($loc);
// $url->appendChild($freq);

// $xml->appendChild($url);
// $xml->save('sitemap.xml');