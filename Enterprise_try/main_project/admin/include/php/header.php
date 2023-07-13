 <header class="app-header"><a class="app-header__logo" href="/try/main_project/admin/admin_dashboard.php">Sports Club</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">Welcome : <?php echo $_SESSION['admin_login']['username']; ?> <i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="/try/main_project/admin/change_password.php"><i class="fa fa-cog fa-lg"></i> Change Password</a></li>
            <li><a class="dropdown-item" href="/try/main_project/admin/admin_profile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="/try/main_project/admin/admin_logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>