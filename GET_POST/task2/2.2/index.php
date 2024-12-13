<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="name">Введите имя</label>
        <input type="text" name="name">
        <input type="checkbox" name="check">
        <button type="submit">Войти</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $check = isset($_POST['check']);
        $message = ($check) ? "Привет $name!" : "Пока $name!";
        echo $message;
    }
    ?>
</body>

</html>