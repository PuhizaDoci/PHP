<?php include('header.php');?>
		<link rel="stylesheet" type="text/css" href="css/Signup.css">
		<script>
			function myFunction() {
				  var x, text;

				  // Get the value of the input field with id="numb"
				  x = document.getElementById("phone").value;

				  // If x is Not a Number or less than one or greater than 10
				  if (isNaN(x)) {
				    text = "Input not valid";
				  } else {
				    text = "Input OK";
				  }
				  document.getElementById("sub").innerHTML= text;
				}
		</script>

	<body>
<main>

    <div class="container">

        <div class="main-top">

            <nav>
                <ul>
                    <li>
                        <a href="mainproject.htm">
                            HOME
                        </a>
                    </li>
                    <li>
                        <a href="about.html">ABOUT</a>
                    </li>
                    <li>
                        <a href="company.html">COMPANY</a>
                    </li>

                    <li>

                        <a href="services.html">SERVICES</a>
                    </li>
                    <li class="dropdown">
                        <a href="products.html">
                            PRODUCTS
                        </a>
                        <ul class="dropdown_menu">
                            <li>
                                <a href="phones.html">Phones</a>
                            </li>
                            <li>
                                <a href="https://swappa.com/laptops">Laptops</a>
                            </li>
                            <li>
                                <a href="https://swappa.com/cameras">Cameras</a>
                            </li>
                            <li>
                                <a href="games.html">Games</a>
                            </li>
                            <li>
                                <a href="https://swappa.com/buy/tablets">Tablets</a>
                            </li>
                            <li>
                                <a href="https://swappa.com/wearables">Watches</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="gallery.html">GALLERY</a>
                    </li>
                    <li>
                        <a href="protfolio.html">PORTFOLIO</a>
                    </li>
                    <li class="dropdown">
                        <a href="introduction.html">
                            WHY US
                        </a>
                        <ul class="dropdown_menu">
                            <li>
                                <a href="introduction.html">Introduction</a>
                            </li>
                            <li>
                                <a href="customers.html">Costumers</a>
                            </li>
                            <li>
                                <a href="security.html">Security</a>
                            </li>
                            <li>
                                <a href="special-offer.html">Special Offer</a>
                            </li>
                            <li>
                                <a href="news.html">News and Information</a>
                            </li>
                            <li>
                                <a href="partners.html">Partners</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </nav>
        </div>
			<div class="simple-form">

				<form id="registration">

					<input type="text" name="fname" placeholder="First name" id="button" required><br><br>
					<input type="text" name="lname" placeholder="Last name" id="button" required><br><br>
					<input type="email" name="email" placeholder="Email" id="button" required><br><br>
					<input type="password" name="password" placeholder="Password" id="button" required><br><br>
					<select id="ph"><datalist><option>+383</option><option>+386</option><option>+377</option></datalist>
				</select>
				<input  name="num" placeholder="Enter your phone number" id="phone" pattern="\d{8}" required><br><br>
				<input type="radio" name="gender" id="rd">&nbsp;&nbsp;&nbsp;&nbsp;<span id="but">Male</span>
				<input type="radio" name="gender" id="rd">&nbsp;&nbsp;&nbsp;&nbsp;<span id="but">Female</span><br><br>
				<p style="color: white;">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
				<input type="submit" value="Sign up" id="butto" onclick="myFunction()"><br><br>
				<p id="sub" style="color: white;"></p>
				<p style="color: white;">Already have an account? &nbsp;<a href="login.php" id="log">Log In</a></p>
			</form>
		</div>
	</body>
</html>
