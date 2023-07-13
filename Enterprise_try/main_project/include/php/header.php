<header>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #743a2f;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="include/image/Logo.png" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

      <?php if(empty($_SESSION['user_login']['email'])): ?>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="Homepage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="News_and_update.php">News and update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Booking.php">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Membership.php">Memberships</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Aboutus.php">About Us</a>
          </li>
        </ul>
        <a class="btn btn-secondary ms-auto" href="user_login.php">Log in</a>

        <?php else: ?>
            <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="Homepage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="News_and_update.php">News and update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Booking.php">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Membership.php">Memberships</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Aboutus.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="change_password.php">Change Password</a>
          </li>
        </ul>
        <a class="btn btn-secondary ms-auto" href="user_logout.php">Log out</a>

        <?php endif; ?>
      </div>
    </div>
    </nav>
  </header>