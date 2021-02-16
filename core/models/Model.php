<?php

class Model
{
    protected $db;

    public function __construct()
    {
        $parrentDirectory = dirname(__DIR__);

        $dbConnection = require $parrentDirectory . "\database\config.php";
        $this->db = new DbConnection($dbConnection);
    }

}