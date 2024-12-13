<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    function displayData()
    {

        if (!empty($_POST)) {

            foreach ($_POST as $key => $value) {
                echo htmlspecialchars($key) . ': ' . htmlspecialchars($value) . '<br>';
            }
        }
    }

    displayData();
}