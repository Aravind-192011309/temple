<!-- header -->
  <div class="header" style="  background: url(.\images\navbar-cover.png) center center no-repeat;
    background-size: cover;
    height: 262px;
    width: auto;">
    <div class="header-top">
      <div class="container">
        <div class="head-left">
          <ul class="number">
            <li><span><?php
echo "Date: " . date("Y/m/d") . "<br>";

echo "Day: " . date("l");
?></span></li>          
          </ul>
        </div>
        <div class="head-right">
          <?php if (strlen($_SESSION['otmsuid']>0)) {?>
          <ul class="number">
            <li><a href="donation-history.php">Donation History </a></li>|
            <li><a href="darshan-history.php"> Darshan History </a></li>|
            <li><a href="profile.php">Profile </a></li>|
            <li><a href="change-password.php">Change Password</a></li>|
            <li><a href="logout.php" data-hover="Logout">Logout</a></li>
            
                 <div class="clearfix"> </div>     
          </ul></li><?php } ?>
        </div>
          <div class="clearfix"> </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <div class="logo">
          <a href="" style="text-align:center;"><img src="images/temple2.jpg "class="img-responsive" alt="" width="100" height="50" style="border-radius: 50%; margin-top: -25px;"/>
            <h4 style="font-weight:bold; padding-top:1%; font-size:24px;     text-decoration: none;"> Temple Management System</h4></a>
        </div>
        <div class="bottom-left">
           <?php if (strlen($_SESSION['otmsuid']==0)) {?>
          <a href="register.php">USER LOGIN</a><?php } ?>
        </div>
          <div class="clearfix"> </div>
      </div>
    </div>
            
        <div class="container">
        <div class="head-na">
          <div class="head-nav">
          <span class="menu"> </span>
            <ul class="cl-effect-15">
                <li><a href="index.php" data-hover="HOME">HOME</a></li> <label>|</label>
                <li><a href="festivals.php" data-hover="OUR Festivals">OUR Festivals</a></li> <label>|</label>
               
              
                <li><a href="temples.php" data-hover="Temples">Temples</a></li> <label>|</label>
                <li><a href="about.php" data-hover="ABOUT">About</a></li> <label>|</label>
                <li><a href="contact.php" data-hover="CONTACT">CONTACT</a></li><label>|</label>
<?php if (strlen($_SESSION['otmsuid']==0)) {?>
 <li><a href="admin/login.php" data-hover="ADMIN" style="    background-color: bisque;">Admin</a></li><?php } ?>
                  <div class="clearfix"> </div>
              </ul>
          </div>
          <!-- script-for-nav -->
          <script>
            $( "span.menu" ).click(function() {
              $( ".head-nav ul" ).slideToggle(300, function() {
              // Animation complete.
              });
            });
          </script>
        <!-- script-for-nav --> 
        </div>
        </div>
        
  </div>
  <!-- <style>.header-top {
  background:#ecc66f;
  padding: 0.5em 0;
}
.header-bottom {
	padding: 2em 0 4em;
	background: #ecc66f;
}</style> -->
  <!-- header -->