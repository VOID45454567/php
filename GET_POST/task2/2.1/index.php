<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дни до Нового года</title>
</head>

<body>
    <h1>Введите дату</h1>
    <form method="post" action="">
        <label for="day">День:</label>
        <input type="number" id="day" name="day" min="1" max="31" required>
        <br>
        <label for="month">Месяц:</label>
        <input type="number" id="month" name="month" min="1" max="12" required>
        <br>
        <label for="year">Год:</label>
        <input type="number" id="year" name="year" required>
        <br>
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $day = intval($_POST['day']);
        $month = intval($_POST['month']);
        $year = intval($_POST['year']);

        $inputDate = new DateTime("$year-$month-$day");
        $newYearDate = new DateTime(($month == 12 && $day == 31) ? "$year-12-31" : ($year + 1) . "-01-01");

        $interval = $inputDate->diff($newYearDate);
        $differenceInDays = $interval->days;

        echo "<h2>Осталось $differenceInDays дней до Нового года.</h2>";
    }
    ?>
</body>

</html>