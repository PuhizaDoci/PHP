<?php

// $user = 'user';
// $pass = '12345678';

if (isset($_COOKIE['email']) && isset($_COOKIE['fjalkalimi'])) {

    // if (($_POST['email'] != $user) || ($_POST['fjalkalimi'] != md5($pass))) {
        header('Location: MainPage.php');
    // } else {
    	 echo 'Welcome back ' . $_COOKIE['email'];
    // }

}
?>
