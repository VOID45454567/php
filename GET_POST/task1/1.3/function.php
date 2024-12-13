<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    function displayData()
    {
        $login = $_POST['login'];
        $pass = $_POST['password'];
        $correctData = ['qwezxcqwezxc', "12345667890"];
        if ($login === $correctData[0] && $pass === $correctData[1]) {
            echo 'Доступ к секретным страницам открыт';
        } else {
            echo 'Доступ запрещенн';
        }
    }
    displayData();
}