<?php

namespace App\classes;


class Database
{
    public function dbConnection(){
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbName = 'blog72';
        $link = mysqli_connect($hostname, $username, $password, $dbName);
        return $link;
    }
}