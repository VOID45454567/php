<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="login">Логин</label>
        <input type="text" name="login">
        <label for="comment">Комментарий</label>
        <input type="text" name="comment">
        <button type="submit">Отпарвить</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POSt") {
        $login = $_POST['logiin'];
        $comment = $_POST['comment'];
    }
    ?>
</body>

</html>