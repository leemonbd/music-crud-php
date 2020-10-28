<?php


namespace App\classes;


class Database
{
    public function dbConnection(){
        $hotName='localhost';
        $userName='root';
        $password='';
        $dbName='music';
        $link=mysqli_connect($hotName,$userName,$password,$dbName);
        return $link;
    }

}