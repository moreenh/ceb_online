<?php
namespace App;

/**
 * Created by PhpStorm.
 * User: yasas
 * Date: 12/2/16
 * Time: 8:06 PM
 */
use DatabaseConnection\Connection;

class DBConnector
{
    private static $db_name = "ceb_online";

    public function getWritableDatabase()
    {
        $db_sqli = Connection::getConnection($this::$db_name);
        return $db_sqli->getConn();
    }

}