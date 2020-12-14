<?php

class Model
{
    protected $db;

    public function __construct()
    {
        $parrentDirectory = dirname(__DIR__);

        $dbConnection = require_once $parrentDirectory . "\database\config.php";
        $this->db = new DbConnection($dbConnection);
    }

}