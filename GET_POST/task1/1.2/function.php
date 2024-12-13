<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    function displayData()
    {
        $login = $_POST['login'];
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo $login, "<p>" . $pass;
    }
    displayData();
}