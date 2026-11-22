<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Друга сторінка</title>
</head>
<body>
    <?php
    if (isset($_SESSION['user_login']) && isset($_SESSION['user_password'])) {
        echo "Ви увійшли як: " . $_SESSION['user_login'] . "<br>";
        echo "Ваш пароль у сесії: " . $_SESSION['user_password'];
    } else {
        echo "Дані користувача в сесії відсутні.";
    }
    ?>
</body>
</html>
