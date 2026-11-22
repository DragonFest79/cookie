<?php
session_start();
if (isset($_POST['login']) && isset($_POST['password'])) {
    $_SESSION['user_login'] = htmlentities($_POST['login']);
    $_SESSION['user_password'] = htmlentities($_POST['password']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Вхід на сайт</title>
</head>
<body>
    <form method="POST">
        <p>Логін:<br>
        <input type="text" name="login" required></p>
        <p>Пароль:<br>
        <input type="password" name="password" required></p>
        <input type="submit" value="Увійти">
    </form>

    <?php
    if (isset($_SESSION['user_login'])) {
        echo '<p><a href="login2.php">Перейти на другу сторінку</a></p>';
    }
    ?>
</body>
</html>
