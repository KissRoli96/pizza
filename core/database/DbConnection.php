<?php

class DbConnection
{
    private $servername;
    private $username;
    private $password;
    private $database;

    public function __construct($db)
    {
        $this->servername = $db['servername'];
        $this->username = $db['username'];
        $this->password = $db['password'];
        $this->database = $db['database'];

    }


    public function connect()
    {
        $conn = new mysqli($this->servername,$this->username,$this->password,$this->database);
        return $conn;
    }

}


