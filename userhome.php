<?php
include('includes/config.php');
session_start();
error_reporting(0);

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Temple Management System || Home Page</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js"></script>


</head>
<body style="     background: url(../images/templebg.jpg)  no-repeat;">
<!-- header -->
	<?php include_once('includes/header1.php');?>
	<!-- slider -->
	<div class="container">
	<div class="confess-top">
			<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<?php
			 
$ret=mysqli_query($con,"select *from  tbltemple");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
								<li>
									
									<div class="confess">
										<div class="col-md-7 confess-left">
											<a href="single-temple.php?tid=<?php echo  htmlentities($row['ID']);?>"><img src="admin/templeimages/<?php echo htmlentities($row['TempleImage1']);?>" class="img-responsive" alt="" /></a>
										</div>
										<div class="col-md-5 confess-right">
											<h2><?php echo  htmlentities($row['TempleName']);?></h2>
											<p><?php echo  htmlentities($row['Description']);?>.</p>
												<a href="single-temple.php?tid=<?php echo  htmlentities($row['ID']);?>" class="more">View more</a>
										</div>										
											<div class="clearfix"> </div>
									</div>
								</li><?php 
$cnt=$cnt+1;
}?>
							
								<div class="clearfix"> </div>
							</ul>
						</div>
					</section>
				</div>
				</div>
					<!-- FlexSlider -->
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!-- FlexSlider -->
	<!-- slider -->
	<div class="rooted">
	<div class="container">
		<div class="col-md-9 roted-left">
		

			</div>
		</div>
		<div class="col-md-3 rooted-right">
			<div class="wor">
				<!-- <h3>Temples</h3> -->
				<ul>
					<!-- <li><img src="images/place-2016-10-20-9-2debe815231bfc6ee1046e0b27a3e84b.jpg" width="300" height="300"></li> -->
					
				</ul>
			</div>
			
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
					</div>
		<div class="clearfix"> </div>
	</div>
	</div>
	<!-- footer -->
	
	<style>.confess-top {
    margin: 5em 0 0;
    background: #f3d496;
    padding: 2em 1em;
    box-shadow: 0px 0px 2px 0px;
}
.flex-control-nav li {
    margin: 0 0px;
    display: inline-block;
    zoom: 1;
    *display: inline;
    padding: -0.7em 0.5em;
    background: #f5f5dc;
}
.rooted h3 {
  font-size: 1.5em;
  text-transform: uppercase;
  margin: 0;
  color: cornsilk;
}
a.vie {
    font-size: 1.2em;
    color: cornsilk;
    font-weight: 400;
}
</style>
</body>
</html>