<?php

class User extends Model
{
    public $username;
    public $pwd;
    public $id;
    public $admin;

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

    public function getAlladmins()
    {
        $sql = "SELECT * FROM user WHERE admin=1";
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
        $sql = "SELECT * FROM `user` WHERE username = '$this->username'";
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
                    $_SESSION['id'] = $data['id'];
                    return  true;
                }
        }
        return false;
   }

   public function findOne($id)
   {
       $sql = "SELECT * FROM `user` WHERE id = '$id'";
       $result = $this->db->connect()->query($sql);

       $numRows = $result->num_rows;
       if ($numRows > 0) {
           while ($row = $result->fetch_assoc()) {
               $data = $row;
           }


           $user = new User();
           $user->id = $data['id'];
           $user->username = $data['username'];
           $user->pwd = $data['pwd'];
           $user->admin = $data['admin'];

       }
       return $user;

   }
}