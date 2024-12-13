<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="content" method="post">
        <label for="check">Вам исполнилось 18?</label>
        <input type="checkbox" name="check">
        <button type="submit">Войти</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $check = isset($_POST['check']);
        $message = $check ? 'Доступ разрешенн' : "Доступ запрещенн";
        echo $message;
    }
    ?>
</body>

</html>