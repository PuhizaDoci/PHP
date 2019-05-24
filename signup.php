<?php include('header.php');
		include_once('serverSide.php');
		include_once("DB.php");
?>
		<link rel="stylesheet" type="text/css" href="css/Signup.css">


	<body>
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

			<div class="simple-form">

				<form id="registration" method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

					<input type="text" name="emri" placeholder="First name" id="button" required><br><br>
					<input type="text" name="mbiemri" placeholder="Last name" id="button" ><br><br>
					<input type="email" name="email" placeholder="Email" id="button" required><br><br>
					<input type="password" name="fjalkalimi" placeholder="Password" id="button" required><br><br>
					<select id="ph"><datalist><option>+383</option><option>+386</option><option>+377</option></datalist>
				</select>
				<input name="numri" placeholder="Enter your phone number" id="phone" required><br><br>
				<p style="color: white;">By creating an account you agree to our <a href="https://www.freeprivacypolicy.com/terms-of-use.html" target="_blank" style="color:dodgerblue">Terms & Privacy</a>.</p>
				<input type="submit" name="submit" value="Sign up" id="butto"><br><br>
				<p id="sub" style="color: white;"></p>
				<p style="color: white;">Already have an account? &nbsp;<a href="login.php" id="log">Log In</a></p>
			</form>
			

			<?php include('printKlienti.php');?>
			<?php 	

			if(isset($_POST['submit'])){
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
 				 $emri=mysqli_real_escape_string($connect,$_POST['emri']);
  				$mbiemri=mysqli_real_escape_string($connect,$_POST['mbiemri']);
 				$printimi = new printKlienti($emri,$mbiemri);
				

			}
		}
			 ?>

		</div>
	</body>
</html>


