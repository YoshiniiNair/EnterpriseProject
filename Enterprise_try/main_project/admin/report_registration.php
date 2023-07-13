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

    <!--Title-->
    <title>Admin | User Registration Report</title>
    <!--Title ended-->
    
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
            <h3 class="tile-title">User Registration Report</h3>
            <div class="tile-body">
              <form class="row" method="post">
               <div class="form-group col-md-6">
                  <label class="control-label">From Date</label>
                  <input class="form-control" type="date" name="fdate" id="fdate" placeholder="Enter From Date">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">To Date</label>
                  <input class="form-control" type="date" name="todate" id="todate" placeholder="Enter To Date">
                </div>
                <div class="form-group col-md-4 align-self-end">
                  <input type="Submit" name="Submit" id="Submit" class="btn btn-primary" value="Submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>

      <?php
      if(Isset($_POST['Submit'])){
      
      $fdate=$_POST['fdate'];
      $tdate=$_POST['todate'];
      ?>
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>User No.</th>
                    <th>Userame</th>
                    <th>Email</th>
                    <th>Registered Date</th>
                    <th>Membership</th>
                    <!--<th>Action</th>-->
                  </tr>
                </thead>
                <?php
                $sql="SELECT * from user_login where create_date between '$fdate' and '$tdate'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                {
                  while($row = $result->fetch_assoc())
                  {

                    /*
                $stmt=$conn->prepare($sql);
                $query->bindParam(':fdate',$fdate, PDO::PARAM_STR);
                $query->bindParam(':tdate',$tdate, PDO::PARAM_STR);
                $query->execute();
                $results = $query -> fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query -> rowCount() > 0)
                {
                foreach($results as $result)
                {
                  */
                ?>

                <tbody>
                  <tr>
                    <!--<td><?php echo($cnt);?></td>-->
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['create_date']; ?></td>
                    <td><?php //echo $row['membership']; ?></td>
                    <!--<td><center><a href = "member_edit.php?user_id=<?php echo $row['user_id']?>" class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span>  Update</a> | <a  href = "delete_member.php?user_id=<?php echo $row['user_id']?>" class = "btn btn-danger"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>-->
                  </tr>
                  
                  <?php 
                  //$cnt=$cnt+1; 
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
      <?php } ?>
    </main>

    <!-- Essential javascripts for application to work-->
    <script src="include/js/jquery-3.2.1.min.js"></script>
    <script src="include/js/popper.min.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script src="include/js/admin.js"></script>
    <script src="include/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="include/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="include/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>

  <!--Footer-->
  <?php include('include/php/footer.php');?>
  <!--Footer end-->
</html>
<?php //} ?>