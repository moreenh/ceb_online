<?php

namespace DatabaseConnection;

use mysqli;

/**
 * Created by PhpStorm.
 * User: yasas
 * Date: 12/2/16
 * Time: 6:42 PM
 */
class Connection
{
    //Needs to be changed on device specifically
    private $servername = "localhost";
    private $username = "root";
    private $password = "yasas22";

    private $conn;
    private static $connection;

    private function __construct($db_name)
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $db_name);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function getConn()
    {
        return $this->conn;
    }

    public static function getConnection($db_name)
    {
        if (Connection::$connection == null) {
            Connection::$connection = new Connection($db_name);
        }
        return Connection::$connection;
    }
}