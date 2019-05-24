<?php include('header.php');
		include_once('serverSide.php');
		include_once('cookies.php');

	$user = 'fjollaz@gmail.com';
$pass = '12345678';

if (isset($_POST['email']) && isset($_POST['fjalkalimi']))
{

    if (($_POST['email'] == $user) && ($_POST['fjalkalimi'] == $pass)) {

        if (isset($_POST['rememberme'])) {
            setcookie('email', $_POST['email'], time()+6060, 'account', 'www.example.com');
            setcookie('fjalkalimi', md5($_POST['fjalkalimi']), time()+6060, 'account', 'http://www.example.com');

        } else {
            setcookie('email', $_POST['email'], false, 'account', 'www.example.com');
            setcookie('fjalkalimi', md5($_POST['fjalkalimi']), false, 'account', 'http://www.example.com');
        }
        header('Location login.php');

    } else {
        echo 'EmailFjalkalimi Invalid';
    }

} else {
    echo 'You must supply an email and password.';
}
?>
		<link rel="stylesheet" type="text/css" href="css/Signup.css">
		<main>
			<div class="container">
				<div class="main-top">

					<nav>
                <ul>
                    <li>
                        <a href="MainPage.php">
                            HOME
                        </a>
                    </li>

                    <li>
                        <a href="Company.php">COMPANY</a>
                    </li>

                    <li>

                        <a href="Services.php">SERVICES</a>
                    </li>


                </ul>

            </nav>
				</div>

			</div>
      <body>
      <main>
			<div class="simple-form">

				<form id="registration" method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<input type="email" name="email" placeholder="Email" id="button"><br><br>
					<input type="password" name="fjalkalimi" placeholder="Password" id="button" pattern=".{6,}" title="Password must contain at least 8 characters."><br><br>
					<label style="color: white; margin-right: 150px;">
					Remember Me: <input type="checkbox" name="rememberme" value="1"><br>
					</label><br><br>
					<input type="submit" name="login" value="Log In" id="butto" onclick="myFunction()"><br><br>

					<p style="color: white;">Don't have an account? &nbsp;<a href="signup.php" id="log">Sign Up</a></p>

					<p style="color: white;" id="emp"></p>
				</form>
			</div>

		</body>
	</html>
