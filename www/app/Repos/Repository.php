<?php


namespace App\Repos;

use App\DBConnect;
use PDO;

class Repository
{
    /**
     * @return PDO
     */
    public function db(): PDO
    {
        return DbConnect::connect();
    }
}