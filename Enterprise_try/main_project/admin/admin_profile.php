<?php
include('include/php/connection.php');
include('include/php/session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Vali is a">

    <!--Title-->
    <title>Clubify Admin Profile</title>
    <!--Title ended-->

    <!--Link-->
    <link rel="stylesheet" href="include/css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="../css/Login.css" type="text/css">-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!--Link ended-->
  </head>

  <body class="app sidebar-mini rtl">
    <section id="admin_profile">

    <!-- Navbar-->
    <?php include 'include/php/header.php'; ?>
    <!--Navbar ended-->

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include 'include/php/sidebar.php'; ?>
    <!-- Sidebar menu ended-->
    
    <main class="app-content">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Profile</h3>
            <div class="tile-body">
              <form class="row" method="post">

                  <?php 
                  $username="";

                  if(isset($_SESSION['admin_login']['username'])){
                    //$admin_id = $_SESSION['admin_login']['admin_id'];
                    //$sql = "SELECT * from admin_login where admin_id='$admin_id'";

                    $username = $_SESSION['admin_login']['username'];
                    $sql = "SELECT * from admin_login where username='$username'";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0){
                      while($row = $result->fetch_assoc())
                      {
                  ?>

                  <div class="form-group col-md-12">
                    <label class="control-label">Username</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Enter your username" value="<?php echo $row['username']; ?>" readonly>
                  </div>
                  
                  <div class="form-group col-md-12">
                    <label class="control-label">Registered Date</label>
                    <input class="form-control" type="text" name="reg" id="reg"  value="<?php echo $row['create_date']; ?>" readonly>
                  </div>
                  
                  <!--
                  <div class="form-group col-md-4 align-self-end">
                    //<input type="submit" id="btn_update" name="btn_update" value="Update" class="btn_update btn btn-primary">
                    <button type="submit" id="btn_update" name="btn_update" class="btn_update btn btn-primary">
                      Update
                    </button>
                  </div>
                  -->
                
                <?php }}} ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Essential javascripts for application to work-->
    <script src="include/js/jquery-3.2.1.min.js"></script>
    <script src="include/js/popper.min.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script src="include/js/admin.js"></script>
    <script src="include/js/plugins/pace.min.js"></script>

    </section>
  </body>

  <!--Footer-->
  <?php include('include/php/footer.php'); ?>
  <!--Footer end-->
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
//$admin_id = $_SESSION['admin_login']['admin_id'];
$admin = $_SESSION['admin_login']['username'];
$username = $_POST['username'];
//$password = $_POST['password'];

if($admin === $username){
  $username = $_POST['username'];
  $sql="UPDATE admin_login SET username='$username' WHERE username='$admin'";
  if(mysqli_query($conn, $sql)){
    echo "<script type='text/javascript'>
    alert('Update Successfull!');
    window.location = admin_profile.php;
    </script>";
  }else{
    echo "<script type='text/javascript'>
    alert('Update failed!');
    window.location = admin_profile.php;
    </script>";
  }
}else{
  echo "<script type='text/javascript'>
  alert('Admin username error!');
  window.location = admin_profile.php;
  </script>";
}
}mysqli_close($conn);
?>