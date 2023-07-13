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
        <title>Admin | Add New Memberships</title>
        <!--Title ended-->

         <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="include/css/style.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Link ended-->
    </head>

    <body>
      <section id="admin_dashboard">

        <!-- Navbar-->
    <?php include('include/php/header.php');?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include('include/php/sidebar.php');?>
    <main class="app-content">
    <form action="" method="POST">
          <div class="row">

          <div class="container-fluid">
          
            <div class="col-12">
            <div class="row">
                <div class="col-md-12">

                    <div class="form-group">
                        <label for="title" class="control-label">Title</label>
						<input type="text" name="title" id="title" class="form-control form-control-sm rounded-0" placeholder="Enter membership title" required>
					</div>

                    <div class="form-group">
                        <label for="description" class="control-label">Description</label>
                        <textarea name="description" id="description" cols="30" rows="4" class="form-control rounded-0 summernote" placeholder="Enter membership description" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price" class="control-label">Price (RM)</label>
                        <input type="text" name="price" id="price" class="form-control form-control-sm rounded-0" placeholder="0.00" required>
                        <!--pattern="[0-9.]+"-->
                    </div>

                    <!--
                    <div class="form-group">
                        <label for="current_price" class="control-label">Current Price</label>
                        <input type="text" pattern="[0-9.]+" name="current_price" id="current_price" required class="form-control form-control-sm rounded-0" value="<?php echo isset($current_price) ? $current_price : 0 ?>">
                    </div>
                    <div class="form-group">
                        <label for="before_price" class="control-label">Old Price</label>
                        <input type="text" pattern="[0-9.]+" name="before_price" id="before_price" required class="form-control form-control-sm rounded-0" value="<?php echo isset($before_price) ? $before_price : 0 ?>">
                    </div>
                    <div class="form-group">
                        <label for="subscription_type" class="control-label">Subscription Type</label>
                        <input type="text" name="subscription_type" id="subscription_type" required class="form-control form-control-sm rounded-0" value="<?php echo isset($subscription_type) ? $subscription_type : "" ?>" placeholder="(Monthly, Annually)">
                    </div>
                    -->

                    <div class="form-group">
                        <label for="status" class="control-label">Status</label>
                        <!--
                        <select name="status" id="status" class="form-select form-select-sm rounded-0">
                            <option value="1" <?php echo (isset($status) && $status == 1 ) ? 'selected' : '' ?>>Active</option>
                            <option value="0" <?php echo (isset($status) && $status == 0 ) ? 'selected' : '' ?>>Inactive</option>
                        </select>
                        -->
                        <select id="status" name="status" width="auto">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" id="btn_submit" name="btn_submit" value="Add" class="btn_submit btn btn-success btn-block btn-lg gradient-custom-4 text-body"/>
                        <button type="submit" name="btn_submit" id="btn_submit" class="btn_submit btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>
    
</div>
        </div>
        </form>
    </main>
    </section>

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

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!--template ened-->

    </body>

    <!--Footer-->
    <?php include('include/php/footer.php');?>
    <!--Footer end-->
</html>

<?php
$title = "";
$description = "";
$price = "";
$status = "";

$error= "";
//$error = array();

if(isset($_POST['btn_submit'])){
     
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $status = $_POST['status'];

    $query = "INSERT INTO membership(name, description, price, status) VALUES('$title', '$description', $price', '$status')";

    if(mysqli_query($conn, $query)){
        echo "<script type='text/javascript'>
            window.alert('Membership added successfully!')
            window.location.href='membership.php';
            </script>";
    }else{
        echo "<script type='text/javascript'>
            window.alert('Membership added failed.')
            </script>";
    }
}mysqli_close($conn);
?>