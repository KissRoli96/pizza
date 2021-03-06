<?php

/**
 * @param $page
 * @return string
 */
function generateViewUrl($page)
{

    $url = "/pizzaoop/index.php?page=" . $page;

    return $url;

}

/**
 * @param $username
 * @param $password
 * @return bool
 */
function validateRegisterForm($username, $password)
{

    // validalasi szabalyok
    if (empty($username) or strlen($username) < 6) {
        $_SESSION['flash']['error'] = 'Invalid username!';

        return false;
    }

    if (empty($password) or strlen($password) < 6) {
        $_SESSION['flash']['error'] = 'Invalid password!';
        return false;
    }
    return true;
}

/**
 * @param $username
 * @param $password
 * @return bool
 */
function checkLoginValidation($username, $password)
{
    if (empty($username) or strlen($username) < 6 ) {
        return false;
    }

    if (empty($password) or strleN($password) < 6) {
        return  false;
    }

    return true;
}

function redirect($page)
{

    header('Location: http://localhost/' . generateViewUrl($page));
    exit();
}

function isGuest()
{
    if (!isset($_SESSION['username'])) {
        return true;
    }
        return false;
}
