<?php
session_start();
unset($_SESSION['username']);
echo 'Привіт, ' . $_SESSION['username'];
session_destroy();
?>
