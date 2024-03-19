<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['otmsuid']==0)) {
  header('location:logout.php');
  } else{
  	if(isset($_POST['submit']))
  {
  	$uid=$_SESSION['otmsuid'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $pannum=$_POST['pannum'];
    $damt=$_POST['damt'];
    $payopt=$_POST['paymentoption'];
    $message=$_POST['message'];
    $donationnum=mt_rand(100000000, 999999999);
    $_SESSION['donationnum']=$donationnum;
    $donationid=$_GET['donationid'];
    $query=mysqli_query($con, "insert into tbldonation(DonationNumber,UserID,TempleID,City,State,Country,PANNumber,DonationAmount,PaymentOption,Message) value('$donationnum','$uid','$donationid','$city','$state','$country','$pannum','$damt','$payopt', '$message')");
    if ($query) {


 echo "<script>window.location.href='thank-you-donation.php'</script>"; 
  
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>	TEMPLE PASS SYSTEM| | Donation</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js"></script>
  <script type="text/javascript">
<!--
    function showImage(){
        document.getElementById('loadingImage').style.visibility="visible";
    }

    -->

    </script>
</head>
<body>

<!-- header -->
	<?php include_once('includes/header.php');?>
	 <div>
        
    
	
	<!-- contact -->
	<div class="contact">
	<div class="container">
		<h2>Donation For Mandir</h2>

					
					<!----- contact-grids ----->		
					<div class="contact-grids">
						
						
							<div class="clearfix"> </div>
						<!----- contact-form ------>
						<div class="contact-form">
							<form method="post">
								<div class="contact-form-row">
									
								
									<div>
									
										<span>City :</span>
										<input type="text" class="form-control" value="" name="city" required="true">
									</div>
									<div>
										
										<span>State :</span>
										<input type="text" class="form-control" value="" name="state" required="true">
									</div>
									<div>
										
										<span>Country :</span>
										<input type="text" class="form-control" value="" name="country" required="true">
									</div>
									<div>
										<br>
										<span>PAN Number :</span>
										<input type="text" class="form-control" value="" name="pannum" required="true">
									</div>
									<div>
										<br>
										<span>Donation Amount:</span>
										<input type="text" class="form-control" value="" name="damt" id="donation_amount" required="true">
									</div>
									<div>
									
									</div>
									<div>
										<br>
										<span>Payment Option:</span>
										
										<select type="text" class="form-control" value="" name="paymentoption" required="true">
											<option value="">Choose Payment Option</option>
											<!-- <option value="Cash">Cash</option> -->
											<option value="UPI">UPI QR</option>  
											<!-- <option value="Wallet">Wallet</option> -->
											<!-- <option value="Card">Card</option> -->
										</select> 	
									<a href="javascript:void(0)" class="btn btn-sm btn-primary buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/jhgjhgjg.jpg" data-amount="100" data-id="' $_SESSION['donationnum']=$donationnum'"><button class="button-10" role="button" onclick="listview()">Make Payment</button></a>							
										<!-- <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/c05917807.png" data-amount="<?php echo $damt=$_POST['damt']; ?>" data-id="1">payment</a> -->

										<input type="button"  value="SHOW" onclick="showImage();"/> <font color="red">*After Choose payment Option Click Here </font>
										
										<table align="right"><tr>
									
    <img id="loadingImage"  src="images/PaytmQr.jpeg" height="200" style="visibility:hidden"/>
    </td></tr></table>
  								</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
								<div class="contact-form-row2">
									<span>Message(Related to donation) :</span>
									<textarea name="message" class="form-control"> </textarea>
								</div>
								<input type="submit" value="send" name="submit">
							</form>
						</div>
						<!----- contact-form ------>
					</div>
					<!----- contact-grids ----->
			
		</div>
	</div>
	<!-- contact -->		
	<?php include_once('includes/footer1.php');?>

	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js'></script>

<script>

  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = parseInt($('#donation_amount').val());
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_MGWGsjkJ3Kthbl",
    "amount": parseInt($('#donation_amount').val()) * 100,
    "name": "Temple Management",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'payment-process.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

            //    window.location.href = 'payment-success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };

     // Dynamically set the amount based on the entered donation amount
	 options.amount = parseInt($('#donation_amount').val()) * 100;

  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });

</script>


</body>
</html><?php } ?>