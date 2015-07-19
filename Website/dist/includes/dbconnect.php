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

    header("Connection: keep-alive");

    function connect(){
        try{
            $bdd = new PDO('mysql:host=127.0.0.1;dbname=bicravart', 'root', '');
            return $bdd;
        }catch (PDOException $e){
                echo 'Erreur : ' . $e->getMessage();
        }
    }

    // function connect(){
    //     try{
    //         $bdd = new PDO('mysql:host=host=doyouclixubicrav.mysql.db;dbname=doyouclixubicrav', 'doyouclixubicrav', '5aGHC6aRJNbe');
    //         return $bdd;
    //     }catch (PDOException $e){
    //             echo 'Erreur : ' . $e->getMessage();
    //     }
    // }
?>