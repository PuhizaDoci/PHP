<?php

$user = 'fjollaz@gmail.com';
$pass = '12345678';

if (isset($_COOKIE['email']) && isset($_COOKIE['fjalkalimi'])) {

    if (($_POST['email'] != $user) || ($_POST['fjalkalimi'] != md5($pass))) {
        header('Location: login.php');
    } else {
        echo 'Welcome back ' . $_COOKIE['email'];
    }

} else {
    header('Location: login.php');
}
?>
