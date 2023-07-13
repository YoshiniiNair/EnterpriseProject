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
        <title>Clubify Admin Dashboard</title>
        <!--Title ended-->

        <!--Link-->
        <link rel="stylesheet" href="include/css/style.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link rel="stylesheet" href="../css/Login.css" type="text/css">-->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <!--Link ended-->
    </head>

    <body>
      <section id="admin_dashboard">

        <!--template-->
        
        <!-- Navbar-->
        <?php include 'include/php/header.php'; ?>
        <!--Navbar ended-->

        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <?php include 'include/php/sidebar.php'; ?>
        <!--Sidebar menu ended-->
          
        <main class="app-content">
          <div class="app-title">
            <div>
              <h1>
                <i class="fa fa-dashboard"></i> Dashboard
              </h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ul>
          </div>
          
          <div class="row">

          <div class="form-box">
            <div class="form-value">
              <form action="" method="POST">
                <h1>
                  Welcome to The Admin Dashboard
                </h1>

                <!--Logout Button-
                <div>
                  <!--Admin Logout
                  <div class="u-align-center u-form-group u-form-submit">
                    <input type="submit" value="Log Out" name="btn_adminLogout" id="btn_adminLogout" formaction="admin_logout.php">
                    <!--class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-radius-5 u-btn-1"
                  </div>
                  <!--Admin Logout ended
                </div>
                Logout Button ended-->

              </form>
            </div>
          </div>
        </div>
     
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="include/js/jquery-3.2.1.min.js"></script>
    <script src="include/js/popper.min.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script src="include/js/admin.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="admin/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="admin/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="admin/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
            <!--template ened-->
        </section>
        
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>

    <!--Footer-->
    <?php include('include/php/footer.php'); ?>
    <!--Footer end-->
</html>