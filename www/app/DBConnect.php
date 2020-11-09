<?php


namespace App;


use PDO;
use PDOException;

final class DBConnect
{
    private static  ?PDO $instance = null;

    private function __construct(){}

    public static function connect()
    {
        if (self::$instance == null) {
            self::$instance = (new DBConnect())::doConnect();
        }

        return self::$instance;
    }

    private static function doConnect() : PDO
    {
        $config = require 'config.php';
        try {
            $conn = new PDO("mysql:host={$config['db']['host']};dbname={$config['db']['db']};charset=UTF8", $config['db']['user'], $config['db']['pass']);
            $conn->exec("set names utf8");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            throw $e;
        }
    }
}