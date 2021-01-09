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
        $this->pwd = crypt($this->pwd);
        $sql = "INSERT INTO user (username,pwd) VALUES ( '$this->username','$this->pwd') ";
        $result = $this->db->connect()->query($sql);

        return $result;
    }

    public function login()
    {
        $sql = "SELECT `username`,`pwd` FROM `user` WHERE username = '$this->username'";

        $result = $this->db->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data = $row;

                }
                //1. db-bol kapott hash
                //2. login formbol plain text jelszo

                if (password_verify($this->pwd, $data['pwd'])) {
                    $_SESSION['username'] = $this->username;
                    return  true;
                }
        }
        return false;
   }
}