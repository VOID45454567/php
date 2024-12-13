<?php

$arr = ['a', 'b', 'c', 'd', 'e'];

if (isset($_GET['element'])) {
    $elementIndex = $_GET['element'];


    if (isset($arr[$elementIndex])) {
        echo "Выбранный элемент: " . htmlspecialchars($arr[$elementIndex]);
    } else {
        echo "Элемент не найден.";
    }
} else {
    echo "<h2>Выберите элемент:</h2>";
    foreach ($arr as $index => $value) {
        echo "<a href='?element=$index'>Элемент $index: $value</a><br>";
    }
}