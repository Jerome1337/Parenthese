<?php
    /* Connexion à une base ODBC avec l'invocation de pilote */
    // $dsn = '********';
    // $user = '*********';
    // $password = '*******';
    //try {
    //     $dbh = new PDO($dsn, $user, $password);
    // } catch (PDOException $e) {
    //     echo 'Connexion échouée : ' . $e->getMessage();
    // }

   	$dsn = 'mysql:dbname=bicravart;host=localhost;charset:UTF-8';
	$user = 'root';
	$password = 'root';

    function connect(){
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=bicravart', 'root', 'root');
            return $bdd;
        }catch (PDOException $e){
                echo 'Erreur : ' . $e->getMessage();
        }
    }
?>