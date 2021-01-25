<?php
session_start();

if (isGuest()) {
    redirect('main');
}

if (session_destroy()) {
    header('Location: http://localhost/' . generateViewUrl('login'));
}