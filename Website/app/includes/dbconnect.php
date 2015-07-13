<?php
    /* Connexion à une base ODBC avec l'invocation de pilote */
    // $dsn = 'mysql:dbname=doyouclixubicrav;host=doyouclixubicrav.mysql.db;charset:UFT-8';
    // $user = 'doyouclixubicrav';
    // $password = '5aGHC6aRJNbe';
    // try {
    //     $dbh = new PDO($dsn, $user, $password);
    // } catch (PDOException $e) {
    //     echo 'Connexion échouée : ' . $e->getMessage();
    // }

   	$dsn = 'mysql:dbname=bicravart;host=localhost;charset:UFT-8';
	$user = 'root';
	$password = 'root';
	try{
		$bdd = new PDO($dsn, $user, $password);
	}catch (PDOException $e){
	        echo 'Erreur : ' . $e->getMessage();
	}