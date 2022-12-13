<?php

include 'connect.php';



date_default_timezone_set("Asia/Kolkata");
$e = strval(date('Ymd'));
$d  = substr($e,0,4).'-'.substr($e,4,2).'-'.substr($e,6,2);

$eid = autoincemp($d);

function autoincemp($date)
{
    $date =str_replace("-","",$date);
   
    global $value2;
    global $con;
    $query = "select eid from enrollement_details  where eid LIKE '%".$date."%' order by eid desc LIMIT 1";
    $stmt = mysqli_query($con,$query);
    $rowcount=$stmt->num_rows;
    if ($rowcount > 0) {
    
      $row = mysqli_fetch_assoc($stmt);
        $value2 = $row['eid'];
        $value2 = substr($value2,9);
        $value2 = (int)$value2 + 1;
        $value2 = $date.sprintf('%s',$value2);
        $value = 'E'.$value2;
        return $value;
    } else {
        $str=$date;
        $value2 = $str.sprintf('%s',1);
        $value = 'E'.$value2;
        return $value;
    }
}

if(isset($_POST['register']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $phn1=$_POST['phn'];
    $phn=(int)$phn1;
   
    $batch=$_POST['bat'];

	$query = "INSERT INTO `enrollement_details`(`eid`, `first_name`, `last_name`, `age`, `phone_number`) VALUES ('$eid','$fname','$lname','$age','$phn')";
	  $run = mysqli_query($con, $query);
      if($run){
        $query1 = "INSERT INTO `batch_status`(`eid`, `bid`, `counter`) VALUES ('$eid','$batch','0')";
        $run1 = mysqli_query($con, $query1);
        if($run1){
       echo "<script>document.location='admin_dashboard.php'</script>";}
	     }
      else{
        echo" <script>document.location=''</script>";
      }
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
                                <h1>Login</h1>
                                <p class="account-subtitle">User Register Form</p>
                                
                                <!-- Form -->
                                <form method="post">
								  <form method="post" autocomplete="off" class="needs-validation" novalidate>
										<div class="row">
											

												<div class="form-group">
												
										            <label>First Name</label>
										            <input type="text" name="fname"  name="fname" onkeypress="return (event.charCode > 64 && 
	                                                 event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || 
													 (event.charCode==32) || (event.charCode==46)" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "FULL Name"
                                                    </div>
									      
												</div>
												

												<div class="form-group">
										             <label>Last Name</label>
										            <input type="text" name="lname"  name="lname" onkeypress="return (event.charCode > 64 && 
	                                                 event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || 
													 (event.charCode==32) || (event.charCode==46)" class="form-control">
													
									            </div>
												<div class="form-group">
													<label>Age  </label>
													<div>
													<input type="number" name="age"  min="18" max="65" maxlength=3 class="form-control"required>
													</div>
													<div class="invalid-feedback">
														Please choose "AGE"
													</div>
                                                </div>
												
												<div class="form-group">
													<label>Phone Number</label>
													<div>
													<input type="text" pattern="[6-9]{1}[0-9]{9}"  name="phn" maxlength=10 class="form-control"required>
													</div>
													<div class="invalid-feedback">
													    Please choose "Phone Number"
													</div>
                                                </div>
												
                                             <div class="form-group">
													<label>Batch</label>
													<div>
														<select name="bat" class="form-control form-select"required>
															<option value="">-- Select --</option>
															<option value="Batch-1">6:00 AM- 7:00 AM</option>
															<option value="Batch-2">7:00 AM - 8:00 AM</option>
                                                            <option value="Batch-3">8:00 AM- 9:00 AM</option>
															<option value="Batch-4">5:00 PM - 6:00 PM</option>
														</select>
													</div>
													<div class="invalid-feedback">
																Please choose "Batch"
													</div></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="Myfunction()" name="register" type="submit">Register</button>
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