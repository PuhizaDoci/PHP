<?php 
    include('header.php');
	include_once('serverSide.php');
	include_once('cookies.php');

   

if (isset($_POST['email']) && isset($_POST['fjalkalimi']))
{

        if (isset($_POST['rememberme'])) {
            setcookie('email', $_POST['email'], time()+60*60*24);
            setcookie('fjalkalimi', md5($_POST['fjalkalimi']), time()+60*60*24);

        } else {
            setcookie('email', $_POST['email'], false);
            setcookie('fjalkalimi', md5($_POST['fjalkalimi']), false);
        }
        header('Location MainPage.php');

    
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
					<input type="email" name="email" placeholder="Email" id="button"><br><p style="color: white" ><?php echo $emailErr1; ?></p>
					<input type="password" name="fjalkalimi" placeholder="Password" id="button"><br><p style="color: white" ><?php echo $fjalkalimiErr1; ?></p>
					<label style="color: white; margin-right: 150px;">
					Remember Me: <input type="checkbox" name="rememberme" value="1"><br>
					</label><br><br>
					<input type="submit" name="login" value="Log In" id="butto" onclick="myFunction()"><br><br>
                    <p style="color: white" ><?php echo $errors; ?></p>

					<p style="color: white;">Don't have an account? &nbsp;<a href="signup.php" id="log">Sign Up</a></p>

					<p style="color: white;" id="emp"></p>
				</form>
			</div>

		</body>
	</html>
