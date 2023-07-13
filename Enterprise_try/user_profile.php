<?php
include('include/php/connection.php');
include('include/php/session.php');
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
	
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--Title-->
	<title>Clubify | User Profile</title>
    <!--Title ended-->

	<!--Links-->

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<!--<link rel="stylesheet" href="css/magnific-popup.css"/>-->
	<!--<link rel="stylesheet" href="css/animate.css"/>-->
	<!--Stylesheets ended-->

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="include/css/style.css" type="text/css"/>
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!--Main Stylesheet ended-->

    <!--Link ended-->

</head>
<body>
	<!-- Header Section -->
	<?php include('include/php/header.php');?>
	<!-- Header Section end -->
	
	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="image/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Profile</h2>
				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section ended -->

	<!-- Contact Section -->
	<section class="contact-page-section spad overflow-hidden">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-2">
				</div>
				<div class="col-lg-8">
					<form class="singup-form contact-form" method="post">
						<div class="row">
							<?php 
							$username="";

							if(isset($_SESSION['user_login']['email'])){
									$username = $_SESSION['user_login']['username'];
									//$sql = "SELECT * FROM user_login WHERE username LIKE '%$username%'";
									$sql = "SELECT * FROM user_login WHERE username='$username'";
									$result = $conn->query($sql);
									
									if ($result->num_rows > 0)
									{
										while($row = $result->fetch_assoc())
										{
							/*
							$uid=$_SESSION['uid'];
							$sql ="SELECT id, fname, lname, email, mobile, password, address,state,city, create_date from tbluser where id=:uid ";
							$query= $dbh -> prepare($sql);
							$query->bindParam(':uid',$uid, PDO::PARAM_STR);
							$query-> execute();
							$results = $query -> fetchAll(PDO::FETCH_OBJ);
							$cnt=1;
							if($query->rowCount() > 0)
							{
							foreach($results as $result)
							{
							*/
							?>
							
							<div class="form-group col-md-6" hidden>
								<label class="control-label">ID</label>
								<input class="form-control" type="text" name="user_id" id="user_id" placeholder="Your id" value="<?php echo $row['user_id'];//echo $result->username;?>">
							</div>

							<div class="form-group col-md-6">
								<label class="control-label">Username</label>
								<input class="form-control" type="text" name="username" id="username" placeholder="Enter your username" value="<?php echo $row['username'];//echo $result->username;?>">
							</div>
							
							<div class="form-group col-md-6">
								<label class="control-label">Email</label>
								<input class="form-control" type="text" name="email" id="email" placeholder="Enter your email" value="<?php echo $result->email;?>" readonly>
							</div>
							
							<div class="form-group col-md-6">
								<label class="control-label">Registered Date</label>
								<input class="form-control" type="text" name="reg" id="reg"  value="<?php echo $result->create_date;?>" readonly>
							</div>
							
							<!--
							<div class="form-group col-md-4 align-self-end">
								<input type="submit" id="btn_update" name="btn_update" value="Update" class="btn_update btn btn-primary">
							</div>
							-->
							
							<div class="col-md-12">
								<!--<input type="submit" id="submit" name="submit" value="Update" class="site-btn sb-gradient">-->
								<input type="submit" id="btn_update" name="btn_update" value="Update" class="btn_update btn btn-primary">
							</div>
							
							<!--
							<div class="col-md-6">
								<input type="text" name="fname" id="fname" placeholder="First Name" autocomplete="off" value="<?php echo $result->fname;?>">
							</div>
							<div class="col-md-6">
								<input type="text" name="lname" id="lname" placeholder="Last Name" autocomplete="off" value="<?php echo $result->lname;?>">
							</div>
							<div class="col-md-6">
								<input type="text" name="email" id="email" placeholder="Your Email" autocomplete="off" value="<?php echo $result->email;?>" readonly>
							</div>
							<div class="col-md-6">
								<input type="text" name="mobile" id="mobile" placeholder="Mobile Number" autocomplete="off" value="<?php echo $result->mobile;?>">
							</div>
							<div class="col-md-6">
								<input type="text" name="state" id="state" placeholder="State" autocomplete="off" value="<?php echo $result->state;?>">
							</div>
							<div class="col-md-6">
								<input type="text" name="city" id="city" placeholder="City" autocomplete="off" value="<?php echo $result->city;?>">
							</div>
							
							<div class="col-md-12">
								<input type="text" name="address" id="address" placeholder="Address" autocomplete="off" value="<?php echo $result->address;?>">
							</div>
							<div class="col-md-12">
								<input type="submit" id="submit" name="submit" value="Update" class="site-btn sb-gradient">
							</div>
							-->
							<?php }}} ?>
						</div>
					</form>
				</div>
				<div class="col-lg-2">
				</div>
			</div>
		</div>
	</section>
	<!-- Trainers Section end -->
	
	<!-- Footer Section -->
	<?php include 'include/php/footer.php'; ?>
	<!-- Footer Section end -->
	
	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	<!-- Search model -->
	
	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

  <style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #dd3d36;
    color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #5cb85c;
    color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>

<?php
if(isset($_POST['btn_update']))
{
$user_id=$_SESSION['user_login']['user_id'];
$username=$_POST['username'];
$email=$_POST['email'];

$sql="update user_login set username=:username,email=:email,password=:password where user_id=:user_id";

if(mysqli_query($conn,$sql)){
	echo "<script type='text/javascript'>";
	echo "alert('Product updated successfully!')"; 
	echo "</script>";
	header("Location: user_profile.php");
	exit();
}
mysqli_close($conn);
}
?>