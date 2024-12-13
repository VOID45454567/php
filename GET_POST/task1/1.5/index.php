<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Генерация ссылки</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Выберите работу</h1>
    <form method="post">
        <select name="select">
            <option value="lab1">lab1</option>
            <option value="lab2">lab2</option>
            <option value="lab3">lab3</option>
            <option value="lab4">lab4</option>
        </select>
        <button type="submit">Сгенерировать ссылку</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selected = $_POST['select'];
        $link = "http://localhost/php/GET_POST/task1/1.5/index.php?lab=" . substr($selected, -1);
        echo "<p>Сгенерированная ссылка: <a href='$link'>$link</a></p>";
    }
    ?>
</body>

</html>