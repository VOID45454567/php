<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="eng">Англ</label>
        <input type="radio" name="lang" value="eng"
            <?php if (isset($_POST['lang']) && $_POST['lang'] === 'eng') echo 'checked'; ?>>
        <label for="ru">Русский</label>
        <input type="radio" name="lang" value="ru"
            <?php if (isset($_POST['lang']) && $_POST['lang'] === 'ru') echo 'checked'; ?>>
        <button type="submit">Выбрать</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $lang = $_POST['lang'];
        if ($lang === 'eng') {
            echo "Текущий английский";
        } elseif ($lang === 'ru') {
            echo "Текущий русский";
        }
    }
    ?>
</body>

</html>