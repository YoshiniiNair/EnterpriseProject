<?php
include('include/php/connection.php');
include('include/php/session.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Rejection</title>

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="include/css/style.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include('include/php/header.php');?>

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include('include/php/sidebar.php');?>

    <main class="app-content">
    <form class="row" method="post">
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
                <h3>Approval Reject</h3>
                <hr />
                <span>Do you want to reject this application?</span>
                <input type="hidden" name="app_id" value="<?php echo trim($_GET["app_id"]); ?>"/>
                <div>
                  <button type="submit" id="btn_reject" name="btn_reject" class="btn_reject btn btn-primary">
                    Reject
                  </button>
                  &nbsp
                  <button type="submit" id="btn_cancel" name="btn_cancel" class="btn_cancel btn btn-primary" formaction="approval_member.php">
                    Cancel
                  </button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </main>
    
    <!-- Essential javascripts for application to work-->
    <script src="include/js/jquery-3.2.1.min.js"></script>
    <script src="include/js/popper.min.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script src="include/js/main.js"></script>
    <script src="include/js/admin.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="include/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="include/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="include/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>

  <!--Footer-->
  <?php include('include/php/footer.php');?>
  <!--Footer end-->
</html>

<?php
if(isset($_POST['btn_reject'])){
	//$app_id = $_SESSION['member_application']['app_id'];
  $app_id = $_POST['app_id'];
  $sql = "UPDATE member_application SET app_status='Inactive' WHERE app_id='$app_id'";
  if(mysqli_query($conn,$sql)){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Profile updated successfully!')
		window.location.href='approval_member.php';
		</SCRIPT>");
	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Could not update profile, please try it again.')
		window.history.go(-1);
		</SCRIPT>");
	}mysqli_close($conn);
  /*
  $sql1 = "SELECT * FROM member_application WHERE app_id='$app_id'";
  if(mysqli_query($conn, $sql1)){
    
  }
  */
}
?>