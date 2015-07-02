<?php
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
$save = str_replace('data:image/png;base64,', '', $_POST['image']);
file_put_contents('img/graff/graff-'.mt_rand().'.png', base64_decode($save));
