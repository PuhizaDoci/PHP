<?php
// session_start();
?>
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
        <?php
        include ('email.php')
        ?>
      <div class="widthi cFrm">
        <div class="contact">
          <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
            <p class="position">CONTACT US</p>
            <input type="text" name="Person" placeholder="Name" class="name"  <?php if(!empty($nameErr)) { ?> autofocus <?php } ?>><br>
            <input type="text" name="Email" placeholder="Email" class="email"  <?php if(!empty($emailErr)) { ?> autofocus <?php } ?>><br>
            <!-- <input type="text" name="Subject" placeholder="Subject" class="subject" required><br> -->
            <textarea type="textarea" rows="10" name="Message" placeholder="Message" class="message"  <?php if(!empty($feedbackErr)) { ?> autofocus <?php } ?>><?php echo $var = isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea><br>
            <input type="submit" name="submit" value="SUBMIT" class="submit"><br><br>

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
