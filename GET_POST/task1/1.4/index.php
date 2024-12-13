<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Определение дня недели</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Введите вашу дату рождения</h1>
    <form method="post">
        <label for="day">День:</label>
        <input type="number" id="day" name="day" min="1" max="31" required>
        <br>
        <label for="month">Месяц:</label>
        <input type="number" id="month" name="month" min="1" max="12" required>
        <br>
        <label for="year">Год:</label>
        <input type="number" id="year" name="year" min="1900" max="2100" required>
        <br>
        <button type="submit">Узнать день недели</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $day = intval($_POST['day']);
        $month = intval($_POST['month']);
        $year = intval($_POST['year']);

        if (checkdate($month, $day, $year)) {

            $date = new DateTime("$year-$month-$day");
            $dayOfWeek = $date->format('l');
            echo "<h2>Вы родились в {$dayOfWeek}.</h2>";
        } else {
            echo "<h2>Некорректная дата. Пожалуйста, проверьте введенные данные.</h2>";
        }
    }
    ?>
</body>

</html>