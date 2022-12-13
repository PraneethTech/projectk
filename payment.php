<?php

include 'connect.php';



date_default_timezone_set("Asia/Kolkata");
$e = date('F');

if(isset($_POST['register']))
{
    $eid=$_POST['eid'];
    $bid = $_POST['bat'];
    $sql = mysqli_query($con,"select count(*) as count from payment_details where eid='$eid' and month='$e' and status=0");
    $run = mysqli_fetch_assoc($sql);
    if($run['count'] == 1)
    {
        $confirm = mysqli_query($con,"UPDATE `payment_details` SET `status`=1 where eid='$eid' and month='$e'");
        echo "<script>alert('Successfully Paid')</script>";
        echo "<script>document.location='index.php'</script>";

    }
    else
    {
        echo "<script>alert('PAYMENT FAILED!!!')</script>";
        echo "<script>document.location='payment.php'</script>";
    }
    // $lname=$_POST['lname'];
    // $age=$_POST['age'];
    // $phn1=$_POST['phn'];
    // $phn=(int)$phn1;
   
    // $batch=$_POST['bat'];

	// $query = "INSERT INTO `enrollement_details`(`eid`, `first_name`, `last_name`, `age`, `phone_number`) VALUES ('$eid','$fname','$lname','$age','$phn')";
	//   $run = mysqli_query($con, $query);
    //   if($run){
    //     $query1 = "INSERT INTO `batch_status`(`eid`, `bid`, `counter`) VALUES ('$eid','$batch','0')";
    //     $run1 = mysqli_query($con, $query1);
    //     if($run1){
    //    }
	//      }
    //   else{
    //     echo" <script>document.location=''</script>";
    //   }
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>New User Registration form</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
		
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

					                
					              
            <div class="main-wrapper login-body">
            <div class="login-wrapper">
                <div class="container">
                    <div class="loginbox">
                    <div class="login-left">
                            <img class="img-fluid" src="assets/img/logo.png" alt="Logo">
                        </div>
                        <div class="login-right">
                            <div class="login-right-wrap">
                                <h1>USER PAYMENT LINK</h1>
                                <p class="account-subtitle">User Payment Form</p>
                                
                                <!-- Form -->
                                <form method="post">
								  <form method="post" autocomplete="off" class="needs-validation" novalidate>
										<div class="row">
											

												<div class="form-group">												
										            <label>Enter your Enrollement ID</label>
										            <input type="text" id="eid"  name="eid" class="form-control"required>									      
												</div>
												
                                                <div class="form-group">												
										            <label>Payment for month</label>
										            <input type="text" id="mon"  name="mon" value="<?php echo $e; ?>"  disabled=disabled class="form-control"required>									      
												</div>
												
                                                <div class="form-group">												
										            <label>Amount Payable</label>
										            <input type="text" id="am"  name="am" value="₹500/-"  disabled=disabled class="form-control"required>									      
												</div>
                                             	<div class="form-group">
                                                    <button class="btn btn-primary btn-block" name="register" type="submit">Pay</button>
                                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
			
				<!-- Footer -->
				<!-- <footer>
					<p>Copyright © 2020 Dreamguys.</p>					
				</footer> -->
				<!-- /Footer -->
				
			</div>
			<!-- /Page Wrapper -->
		
        </div>
	</div>
		<!-- /Main Wrapper -->
		
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
        <script src="assets/js/feather.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Sweetalert 2 -->
		<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
		<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
        <script>
function myFunction() {
  const inpObj = document.getElementById("age");
  if (!inpObj.checkValidity()) {
    document.getElementById("demo").innerHTML = inpObj.validationMessage;
  } else {
    document.getElementById("demo").innerHTML = "Input OK";
  } 
} 
</script>
    </body>
</html>