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
<form action="" method="POST">
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <h3>Manage Membership</h3>
            <hr />
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Mem No.</th>
                    <th>Membership</th>
                    <th>Description</th>
                    <th>Create Date</th>
                  </tr>
                </thead>
                
               <?php
               $sql="SELECT * FROM membership";
               $result = $conn->query($sql);
               if ($result->num_rows > 0)
               {
                 while($row = $result->fetch_assoc())
                 {
                    ?>

                    <tbody>
                      <tr>
                        <!--<td><?php echo($cnt);?></td>-->
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['create_date']; ?></td>
                      </tr>
                      
                      <?php 
                 }
                }
                ?>
              
                </tbody>
              </table>

              <button id="PrintButton" onclick="PrintPage()">Print</button>
              <script type="text/javascript">
              function PrintPage() {
                window.print();
              }
              </script>
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
<?php //} ?>