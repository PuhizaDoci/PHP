<?php include('header.php');?>
		<script>

	$(document).ready(function(){
		  $("#learn").click(function(){
		    $("#show").slideToggle("slow");
		  });
		});
		</script>

		<style type="text/css">
		#learn {
			font-family: aries;
			font-style: italic;
			max-height: 20px;
			width: 100px;
		padding: 5px;
		text-align: center;
			text-decoration: none;
			font-size: 12px;
		background-color: #e5eecc;
		border-radius:2px;
		margin-left: 60%;
			margin-bottom: 8px;
		}
		#learn:hover {
			font-family: aries;
			height: 20px;
			width: 100px;
			padding: 5px;
			text-align: center;
			text-decoration: none;
			font-size: 12px;
			font-weight: bold;
			background-color: #e5eecc;
			margin-bottom: 8px;
			border-radius:2px;
			margin-left: 60%;
		}
		#show {
			max-width: 1050px;
		padding-left:55px;
		padding-top: 50px;
		display: none;
			text-decoration: none;
			font-size: 1em;
			font-family: arial;
		}
</style>
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

                    <li class="active">

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
        <!-- ==================================2========================================= -->

        <!-- **********************************3***************************************** -->
        <div class="maintop1">

            <div class="maintop2">
                <h1 id="logo" title="Exoy">Exoy</h1>
                <p>
                    <u>Tech Marketplace</u>
                </p>
            </div>

            <div class="maintop3">
                <input class="input1" type="text" placeholder="Search Our Website" title="Search our website"/>
                <input class="input2" type="submit" value="SEARCH" title="Search">
            </div>
        </div>



				<!-- ===========================================this webs part====================================== -->


				<img class="fotoja1" src="Images/Capture.png" alt="tastiere" height="460px" width="1200px" >

				<section class="shkrimi">
					<h3><b>Exoy services</b></h3>
					<p>Exoy Tech Marketplace offers a comprehensive portfolio of services that support the full lifecycle of your assets. At every stage from planning, deployment, support to asset recovery, we offer the expertise and services you need to more accurately budget for IT expenses, deliver better service level agreements and generate greater end-user satisfaction. Let our unique offerings and expertise help you get the most out of your technology investment.</p>
					</section>
				</div>
			</div>
				<div class="krejtlista">
					<div class="ourservices">
						<h3><i>Our services</i></h3>
					</div>
					<ul list-style="none" id="lista1" >
						<li>Latest technology</li>
						<li>Costumization of our products</li>
						<li>Warranty</li>
						<li>Hardware and <abbr title="Original Equipment Manufacturer">OEM</abbr> software support</li>
					</ul>
					<br><br>
					<div class="comunication">
						<h3><i>Comunication with our staff<i></h3>
					</div>
					<ul id="lista2">
						<li>Cooperative staff</li>
						<li>Personalized products</li>
						<li>Recommendations for your business</li>
						<li>Premier Support</li>
					</ul>
				</div>
				<canvas id="katrorat" width="50" height="50"></canvas>
				<div class="warranty">
					<figure>
						<a href="gallery.html"><img src="Images/razer.jpg" width="480" height="247.5"></a>
						<figcaption>Razer laptops</figcaption>
					</figure>
					<article>
						<h4>Warranty</h4>
						<p>&raquo With our warranty policy you can achieve maximum uptime and productivity. For every problem with your
							product, within two years of time, we encourage you to call us. Within a few days one of our technicians
							will arrive on-site. With a base warranty, installation of self-service CRUs (Customer Replaceable Unit) is typically the customer’s responsibility. <br>
							&raquo In case of a battery failure within 1 year of purchase, we provide a replacement. Our technicians ensure
							an effective and efficient battery replacment.<br>
							&raquo Before handing out your PC for repairments to our technicians, you are entitled to keep your Drive, therefore
						<u>all your data will be unshared.</u> </p>
						<div id="learn" style="min-height: 20px">Learn more</div>
						<div id="show">
							<p> &raquo These are some of the products that we have a warranty policy for. There are a lot more, but just to give you an idea, refer to the table below.</p><br>
							<table border="1px"class="table"cellspacing="0.5" cellpadding="-5">
								<tr style="background-color: #7caeff">
									<th>Product </th>
									<th>Brand</th>
									<th>Warranty Time</th>
									<th><p>Warranty properties<p></th>
								</tr>
								<tr>
									<td>Mobile Phone</td>
									<td>Samsung</td>
									<td>1 year</td>
									<td><p>Battery change in case of a failure, before 1 year of use.</p></td>
								</tr>
								<tr>
									<td>Laptop</td>
									<td>Lenovo</td>
									<td>2 years</td>
									<td><p>For every problem within two years, we provide service and part-replacment</p></td>
								</tr>
								<tr>
									<td>Laptop</td>
									<td>DELL</td>
									<td>3 years</td>
									<td><p>Compensates every damage that is not self-inflicted.</p></td>
								</tr>
								<tr>
									<td>Camera</td>
									<td>Sony</td>
									<td>6 Months</td>
									<td><p>Lens failure is always covered.</p></td>
								</tr>
								<tr>
									<td>Mobile Phone</td>
									<td>Huawei</td>
									<td>1 Year</td>
									<td><p>Full compensation, and battery replacment for the first 6 months.</p></td>
								</tr>
								<tr>
									<td>Mobile Phone</td>
									<td>iPhone</td>
									<td>1.5 Year</td>
									<td><p>Screen replacement and service.</p></td>
								</tr>
								<tr>
									<td>Camera</td>
									<td>Canon</td>
									<td>1 Year</td>
									<td><p>Lens failure is always covered.</p></td>
								</tr>
							</table>
						</div>
					</article>
				</div>

				<div class="customization">
					<figure>
						<a href="gallery.html"><img src="Images/download.jpg" width="480" height="277.5"></a>
						<figcaption>Special color keyboard</figcaption>
					</figure>
					<div>
						<h4>Customization</h4>
						<p>&nbsp &nbsp Customize your personal device, or product with all the specifications of your desire, our
							technicians and employees will be at your service for every request. Our main strengths and offers
							for customizing your device would be: <br>
							&raquo Tailoring BIOS settings for your organizational or personal needs.<br>
							&raquo Automate the imaging process, free up IT resources, and maximize your hardware investment. <br>
							&raquo Simplify image management with one dynamic image across multiple hardware platforms<br>
							&raquo First Boot Services that automate provisioning tasks in manufacturing so your systems arrive ready to work.
							<br>
						</p>
					</div>
				</div>
				<div class="premier">
					<figure>
						<a href="#"><img src="Images/tech.jpg" width="480" height="277.5"></a>
						<figcaption>Easy travel laptop.</figcaption>
					</figure>
					<div>
						<h4>Premier Support</h4>
						<p>&raquo We understand IT needs to increase efficiency, reduce complexities, and keep your end users up and running. We know your end users expect fast and frustration-free support. <br>
							&raquo Get a direct line to our most elite technicians who listen first then deliver advanced troubleshooting  They’re measured on first-time fixes so they’re committed to prompt and accurate resolution.
							You also have access to technical account managers who act as a single point of contact for case management. And thanks to next-business-day repair service and prioritized parts access, you’ll keep system downtime and productivity interruptions to an absolute minimum.<br>
							&raquo For more information or pricing, please do not hesitate to contact us.
						</p>
					</div>
				</div>


			</main>
			<!-- ===========================================footer==================================================== -->
			<footer>
				<div class="footer">
					<div class="widthi">
						<div class="aboutus">
							<p style="margin-top: auto;" class="position">ABOUT US</p>
							<img src="Images/blue.jpg" width="215px" height="90px" class="imgborder" >
							<p class="p1">
								An independently owned, award-winning tech marketplace that exists to make uncommonly good work for people
								so people can make an uncommon amount of friends and money. We use every experience, tool, trend, skill
								and insight at our disposal to create immediate and lasting connections between brands and human beings. And
								we do it with a bigger smile than most.
							</p>
							<a class="readmore" href="#">Read more &raquo;</a>
						</div>
					</div>
					<div class="widthi">
						<div class="quick">
							<p class="position">QUICK LINKS</p>
							<a href="https://swappa.com/buy/iphones" target="_blank">&raquo; iPhones</a>
							<hr class="viza">
							<a href="https://swappa.com/mobile/samsung/phones" target="_blank">&raquo; Samsung</a>
							<hr class="viza">
							<a href="https://swappa.com/wearables" target="_blank">&raquo; Smart Watches</a>
							<hr class="viza">
							<a href="https://swappa.com/cameras/dslr" target="_blank">&raquo; DSLR</a>
							<hr class="viza">
							<a href="https://swappa.com/gaming/search" target="_blank">&raquo; Video Games</a>
							<hr class="viza">
							<a href="https://swappa.com/gaming/accessories" target="_blank">&raquo; Gaming accessories</a>
							<hr class="viza">
							<a href="https://swappa.com/gaming/vr" target="_blank">&raquo; VR Headsets</a>
							<hr class="viza">
							<a href="https://swappa.com/laptops/chromebooks" target="_blank">&raquo; Chromebook</a>
							<hr class="viza">
							<a href="https://swappa.com/home-tech/voice-assistant/search" target="_blank">&raquo; Voice-assistant</a>
							<hr class="viza">
							<a href="https://swappa.com/home-tech/streaming-device/search" target="_blank">&raquo; Streaming Devices</a>
							<hr class="viza">
						</div>
					</div>
					<br>
					<div class="widthi">
						<div class="blogpost">
							<p class="position">LATEST POSTS<p>
								<h3 style="margin-bottom: 0px;"><b>Top five 5G phones to expect in 2019: Galaxy S10, OnePlus 7, Huawei P30 and more</b></h3>
								<address class="admin">Exoy,exoysw.com<br>
								Monday,25th November 2018</address>
								<p>The 5G phone wars are coming. See which devices are leading the vanguard now...</p>
								<a class="readmore" href="#">Read more&raquo;</a>
								<h3 style="margin-bottom: 0px;"><b>The best gaming keyboards 2018: T3's best gaming keyboard picks</b></h3>
								<address class="admin">Uci,uci.com
								<br> Friday,23th November 2018</address>
								<p>These are the best gaming keyboards to take your PC play to the next level...</p>
								<a class="readmore" href="#">Read more&raquo;</a>
							</div>
						</div>
						<div class="widthi cFrm">
							<div class="contact">
								<form method="get">
                                                <p class="position">CONTACT US</p>
                                                <input type="text" name="Person" placeholder="Name" class="name" required><br>
                                                <input type="text" name="Email" placeholder="Email" class="email" required><br>
                                                <input type="text" name="Subject" placeholder="Subject" class="subject" required><br>
                                                <textarea type="textarea" rows="10" name="Message" placeholder="Message" class="message" required></textarea><br>
                                                <input type="submit" value="SUBMIT" class="submit"><br><br>
                                </form>
							</div>
						</div>
					</div>
				</footer>

				<div class="copy">
					<div class="container">
						<p>&copy;Copyright Exoy's world - All rights reserved </p>
					</div>
				</div>
			</body>
		</html>
