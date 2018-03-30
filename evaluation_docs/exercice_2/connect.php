<?php


namespace connect;

class AbstractController
{
    public function getConnection()
    {
        try {
            return new \PDO('mysql:host=localhost;dbname=userslist', 'root');
        } catch (\PDOException $ex) {
            echo 'Error 404';
            die();
        }
    }
    
    public function startSession()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }
    
    public function redirect($url)
    {
        header('location:'.$url);
        die();
    }
}

