<?php include('header.php');?>
<link rel="stylesheet" type="text/css" href="css/Company.css">

		<script>
		$(document).ready(function(){
		$("h2").click(function(){
		$(this).hide();
		});
		});
		$(document).ready(function(){
		$("#button1").click(function(){
			$("#div1").animate({right: '30px'});
		});
		});
		$(document).ready(function(){
		$("#button2").click(function(){
		$("#div2").animate({right: '30px'});
		});
		});
		$(document).ready(function(){
		$("#button3").click(function(){
		$("#div3").animate({right: '30px'});
		});
		});
		</script>
	</head>
	<body>






<!-- ****************************************2************************************************* -->

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

                    <li  class="active">
                        <a href="Company.php">COMPANY</a>
                    </li>
                    <li>
                        <a href="Services.php">SERVICES</a>
                    </li>



                </ul>

            </nav>
</div>
        <!-- ==================================2========================================= -->

        <!-- **********************************3***************************************** -->
        <div class="maintop1">

            <div class="maintop2">
                <h1 id="logo" title="Exoy">Exoy</h1>
                <p>
                    <u>Tech Marketplace</u>
                </p>
            </div>


        </div>

				<h1 class="box2" style="margin-left: 15px; padding-top:10px" ><div style="background:lightgrey ;height:50px;width:1112px; margin-left:20px">Locations of Exoy Tech  Marketplace</div></h1>
				<div style="padding: 30px">
					<button id="button1"><a href="#epara" style="text-decoration:none">
						</br><p class="box1">Exoy Tech  Marketplace-Kosovo &#9658;</p></a>
						</button>
						<button id="button2"><a href="#edyta" style="text-decoration:none">
							</br><p class="box1a">Exoy Tech  Marketplace-Tokyo &#9658;</p></a>
							</button>
							<button id="button3"><a href="#treta" style="text-decoration:none">
								</br><p class="box1b">Exoy Tech  Marketplace-Germany &#9658;</p></a>
								</button>
							</div>
							<h1  style="margin-left: 15px; padding-top:10px" ><div style="background:lightgrey ;height:50px;width:620px;position: absolute; "  id="div1"><a  name="epara"> MARKET SEGMENTS WE SERVE IN KOSOVO</a></div></h1>
							</br>
							<h2>
							<div class="rendi1">
								<img src="Images\title-img.jpg" class="foto">
								<ul class="ul">
							<li>Watches,Cameras and Laptops</li>
									<li> IoT - Internet of Things (Smart Home, M2M, and Smart City Equipment)</li>
									<li>IT Hardware (CPUs, Memory, HDD, Telecomm Equipment, Laptops, PCs, Server Equipment, POS, Barcode, Printer/Toners)</li>
									<li>Mobile Phones and Tablets</li>
									<li>We give you the tools you need to make the best sales decision. Price history and other analytics are free for you to enjoy</li>
									<li>  <p style="font-weight: bold; padding-top:20px">Locations of our marketplace in Kosovo</p>
										<p><img src="Images\lokKos.jpg" alt="Kosovo"  class="foto1"><p></li>
									</ul>
						</div>
						</h2>
						<h1  style="margin-left: 15px; padding-top:10px" ><div style="background:lightgrey ;height:50px;width:620px;position: absolute;" id="div2"><a name="edyta">MARKET SEGMENTS WE SERVE IN JAPAN</div></h1>
						</br>
						<h2>
						<div class="rendi1">
							<img src="Images\office.jpg" class="foto">
							<ul class="ul">
								<li>Watches,Cameras and Laptops</li>
								<li> IoT - Internet of Things (Smart Home, M2M, and Smart City Equipment)</li>
								<li>IT Hardware (CPUs, Memory, HDD, Telecomm Equipment, Laptops, PCs, Server Equipment, POS, Barcode, Printer/Toners)</li>
								<li>Mobile Phones and Tablets</li>
								<li>We give you the tools you need to make the best sales decision. Price history and other analytics are free for you to enjoy</li>
								<li>  <p style="font-weight: bold; padding-top:20px">Locations of our marketplace in Japan</p>
							<p><img src="Images\Japan.png" alt="Japan"  class="foto1"><p></li>
						</ul>
					</div>
					</h2>
					<h1  style="margin-left: 15px; padding-top:10px" ><div style="background:lightgrey ;height:50px;width:660px;position: absolute;" id="div3"><a name="treta">MARKET SEGMENTS WE SERVE IN GERMANY</a></div></h1>
					</br>
					<h2>
					<div class="rendi1">
						<img src="Images\Dubai.jpg" class="foto">
						<ul class="ul">
							<li>Watches,Cameras and Laptops</li>
							<li> IoT - Internet of Things (Smart Home, M2M, and Smart City Equipment)</li>
							<li>IT Hardware (CPUs, Memory, HDD, Telecomm Equipment, Laptops, PCs, Server Equipment, POS, Barcode, Printer/Toners)</li>
							<li>Mobile Phones and Tablets</li>
							<li>We give you the tools you need to make the best sales decision. Price history and other analytics are free for you to enjoy</li>
							<li>  <p style="font-weight: bold; padding-top:20px">Locations of our marketplace in Germany</p>
						<p><img src="Images\GERMANY.jpg" alt="Germany"  class="foto1"><p></li>
					</ul>
				</div>
				</h2>
			</main>
			<?php include('footer.php');?>
			</body>
		</html>
