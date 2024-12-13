<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic"
        rel="stylesheet" />
</head>

<body>
    <form action="function.php" method="post">
        <input type="text" name="text1">
        <textarea name="textArea"></textarea>
        <div class="checkBoxes">
            <input type="checkbox" name="check1">
            <input type="checkbox" name="check2">
            <input type="checkbox" name="check3">
        </div>
        <div class="toggle">
            <input type="radio" name="radio1">
            <input type="radio" name="radio2">
            <input type="radio" name="radio3">
        </div>
        <button type="submit">Ввести</button>
    </form>
</body>

</html>