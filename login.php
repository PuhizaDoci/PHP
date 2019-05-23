<?php include('header.php');
		include_once('serverSide.php');
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
						<input type="checkbox" checked="checked" name="remember"> Remember me
					</label><br><br>
					<input type="submit" name="login" value="Log In" id="butto" onclick="myFunction()"><br><br>

					<p style="color: white;">Don't have an account? &nbsp;<a href="signup.php" id="log">Sign Up</a></p>

					<p style="color: white;" id="emp"></p>
				</form>
			</div>

		</body>
	</html>
