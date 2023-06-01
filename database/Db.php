<?php

class Db
{

    static public function connect()
    {
        try {
            $dbname = "winbest";
            $username = 'root';
            $password = '';

            //PDO is an extention that help us to make a connection with the data base 
            $db = new PDO('mysql:host=localhost;dbname=' . $dbname, $username, $password);

            return $db;
        } catch (PDOException $e) {

            print $e->getMessage();
            die();
        }
    }
}
