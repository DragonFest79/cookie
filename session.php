<?php
session_start();

$_SESSION['group'] = "КН-31";
$_SESSION['year'] = 2024;

if (isset($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'] + 1;
} else {
    $counter = 1;
}
setcookie("counter", $counter);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Сесія</title>
</head>
<body>
    <?php
    echo "Група: " . $_SESSION['group'] . "<br>";
    echo "Рік початку навчання: " . $_SESSION['year'] . "<br>";
    echo "Ви відвідали цю сторінку " . $counter . " раз<br>";

    unset($_SESSION['group']);
    unset($_SESSION['year']);
    session_destroy();
    ?>
</body>
</html>
