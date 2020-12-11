<?php

class ViewUser extends  User
{

    public function showAllusers()
    {
        $users = $this->getAllusers();

        return $users;

    }
}