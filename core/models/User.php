<?php

class User extends Model
{
    public $username;
    public $pwd;

    public function getAllusers()
    {
        $sql = "SELECT * FROM user";
        $result = $this->db->connect()->query($sql);
        $numRows = $result->num_rows;

        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function insert()
    {

        $sql = "INSERT INTO user (username,pwd) VALUES ( '$this->username','$this->pwd') ";
        $result = $this->db->connect()->query($sql);

        return $result;
    }
}