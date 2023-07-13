<?php
include('include/php/connection.php');
include('include/php/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="include/css/style.css">
  <title>Sports Management Business</title>
</head>

<body>
  <!-- Header Section -->
	<?php include('include/php/header.php');?>
	<!-- Header Section end -->
  
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
							if(isset($_SESSION['user_login']['email'])){
									//$username = $_SESSION['user_login']['username'];
									//$sql = "SELECT * FROM user_login WHERE username LIKE '%$username%'";
									
									$email = $_SESSION['user_login']['email'];
									$sql = "SELECT * FROM user_login WHERE email='$email'";
									/*
									$user_id = $_GET['user_id'];
									$sql = "SELECT * FROM user_login WHERE email='$email'
									JOIN member_application ON user_login.user_id = member_application.user_id
									";
									*/
									$result = $conn->query($sql);
									
									if ($result->num_rows > 0)
									{
										while($row = $result->fetch_assoc())
										{
							?>
							
							<div class="form-group col-md-6" hidden>
								<label class="control-label">ID</label>
								<input class="form-control" type="text" name="user_id" id="user_id" placeholder="Your id" value="<?php echo $row['user_id'];?>">
							</div>

							<div class="form-group col-md-6">
								<label class="control-label">Username</label>
								<input class="form-control" type="text" name="username" id="username" placeholder="Enter your username" value="<?php echo $row['username'];?>">
							</div>
							
							<div class="form-group col-md-6">
								<label class="control-label">Email</label>
								<input class="form-control" type="text" name="email" id="email" placeholder="Enter your email" value="<?php echo $row['email'];?>" readonly>
							</div>
							
							<div class="form-group col-md-6">
								<label class="control-label">Registered Date</label>
								<input class="form-control" type="text" name="reg" id="reg"  value="<?php echo $row['create_date'];?>" readonly>
							</div>

							<div class="form-group col-md-6">
								<label class="control-label">Membership</label>
								<input class="form-control" type="text" name="membership" id="membership"  value="<?php echo $row['create_date'];?>" readonly>
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
							<?php
							}
						    }
						    }
							?>
							
							<div class="col-md-12">
								<!--<input type="submit" id="submit" name="submit" value="Update" class="site-btn sb-gradient">-->
								<!--<button type="submit" id="btn_update" name="btn_update" value="Update" formaction="update_profile.php?user_id=<?php echo $row['user_id'];?> ">Update</button>-->
								<input type="submit" id="btn_update" name="btn_update" value="Update" class="btn_update btn btn-primary">
							</div>

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
	<?php include('include/php/footer.php');?>
	<!-- Footer Section end -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>

<?php
if(isset($_POST['btn_update'])){
	$email = $_SESSION['user_login']['email'];
	//$user_id = $_GET['user_id'];
	$username = $_POST['username'];
	
	//$sql = "UPDATE user_login SET username='$username' WHERE user_id='$user_id' AND email='$email'";
	$sql = "UPDATE user_login SET username='$username' WHERE email='$email'";
 
	if(mysqli_query($conn,$sql)){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Profile updated successfully!')
		window.location.href='Profile.php';
		</SCRIPT>");
	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Could not update profile, please try it again.')
		window.history.go(-1);
		</SCRIPT>");
	}mysqli_close($conn);
}
?>