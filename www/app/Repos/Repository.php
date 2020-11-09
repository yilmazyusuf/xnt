<?php


namespace App\Repos;
use App\DBConnect;
use PDO;

class Repository
{
    public  function db() : PDO
    {
        return DbConnect::connect();
    }
}