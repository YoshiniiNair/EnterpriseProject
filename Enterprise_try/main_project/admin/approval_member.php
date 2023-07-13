<?php
include('include/php/connection.php');
include('include/php/session.php');

/*
//Delete Record Data
if(isset($_REQUEST['del']))
{
$uid=intval($_GET['del']);
$sql = "delete from tblpackage WHERE  id=:id";
$query = $dbh->prepare($sql);
$query-> bindParam(':id',$uid, PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Record Delete successfully');</script>";
echo "<script>window.location.href='add-package.php'</script>";
}
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Add Membership Packages</title>

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

       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <h3>Manage Membership</h3>
            <hr />
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Users</th>
                    <th>Membership</th>
                    <th>Status</th>
                    <th>Create Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
               <?php
               $sql="SELECT * FROM member_application";
               //admin view membership application page
               /*
               $sql = "SELECT member_application.app_id, member_application.user_id, membership.name, membership.price, membership.status, user_login.username
               FROM member_application
               INNER JOIN membership ON member_application.id = membership.id, 
               INNER JOIN user_login ON member_application.user_id = user_login.user_id";
               */
               $result = $conn->query($sql);
               if ($result->num_rows > 0)
               {
                 while($row = $result->fetch_assoc())
                 {
                    ?>

                    <tbody>
                      <tr>
                        <!--<td><?php echo($cnt);?></td>-->
                        <td><?php echo $row['app_id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['create_date']; ?></td>
                        <td><center><a href = "app_update.php?app_id=<?php echo $row['app_id']?>" class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span>Approve</a> | <a  href = "app_reject.php?app_id=<?php echo $row['app_id']?>" class = "btn btn-danger"><span class = "glyphicon glyphicon-trash"></span>Reject</a></center></td>
                      </tr>
                      
                      <?php 
                 }
                }
               /*
                  $sql="SELECT * FROM membership join user_login on membership.user_id=user_login.user_id";
                  $query= $dbh->prepare($sql);
                  $query-> execute();
                  $results = $query -> fetchAll(PDO::FETCH_OBJ);
                  $cnt=1;
                  if($query -> rowCount() > 0)
                  {
                  foreach($results as $result)
                  {
                  ?>

                <tbody>
                  <tr>
                    <td><?php echo($cnt);?></td>
                    <td><?php echo htmlentities($result->category_name);?></td>
                    <td><?php echo htmlentities($result->PackageName);?></td>
                    <td>
<!--                       <a href="add-package.php?cid=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary" type="button">Edit</button></a> 
 -->                      <a href="add-package.php?del=<?php echo htmlentities($result->id);?>"><button class="btn btn-danger" type="button">Delete</button></a></td>
                  </tr>
                    <?php  $cnt=$cnt+1; } } */?>
              
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
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
<?php //} ?>