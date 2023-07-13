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
  <link rel="stylesheet" href="include/css/Booking.css">
  <title>Sports Management Business</title>
</head>
<body>
  <!-- Header Section -->
	<?php include('include/php/header.php');?>
	<!-- Header Section end -->

  <section id="booking">
    <div class="container">
      <h2>Book Your Sports Service</h2>
      <div class="row">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
          <form>
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your full name">
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email address">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
              <label for="service">Select Service</label>
              <select class="form-control" id="service">
                <option>Select a service</option>
                <option>Team and Player Management</option>
                <option>Online reservation</option>
                <option>Event Management</option>
              </select>
            </div>
            <div class="form-group">
              <label for="date">Preferred Date</label>
              <input type="date" class="form-control" id="date">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
	<?php include('include/php/footer.php');?>
	<!-- Footer Section end -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>