<?php

class ViewUser extends  User
{

    public function showAllusers()
    {
        $datas = $this->getAllusers();
        foreach ($datas as $data ) {
            echo "User ID: " . $data['id'] . "<br>";
            echo "User Name: " . $data['username'] . "<br>";
            echo "User Password:" . $data['pwd'] . "<br>";
        }

    }
}