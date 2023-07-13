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
  <link rel="stylesheet" href="include/css/style.css">
  <link rel="stylesheet" href="include/css/Team.css">
  <title>Sports Management Business</title>
</head>
<body>
  <!-- Header Section -->
	<?php include('include/php/header.php');?>
	<!-- Header Section end -->

  <section id="about" class="section">
    <div class="container">
      <h2>ABOUT US</h2>
      <div class="items text-center">
        <div class="row">
          <div class="col-md-4">
          <h3>MISSION</h3>
          <p>We want help to improve health of people by providing a platform that helps find sports club based on their interest or possibly their hobbies.
          </p>
          </div>
     
          <div class="col-md-4">
          <h3>VISION</h3>
          <p>We are developing towards a platform that helps to engage the community and toward having a healthier lifestyle.
          We develop this platform to make it easy for people to book sports facilities.
          </p>
          </div>
        
          <div class="col-md-4">
          <h3>AIM</h3>
          <p>We provide assistance to people who are looking for their favorite sports club that is based on the interest of the customer.
             Find sport club that best suits the interest of user.
          </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section>
  <div class="container">
    <h1 class="section-header">
      Meet our team
    </h1>

  <div class="team">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="single-item">
        <div class="row">
          <div class="col-md-5">
            <div class="profile">
              <div class="img-area">
              
              </div>
              <div class="bio">
                <h3>Dave Wood</h3>
                <h4>Coach</h4>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="content">
              <p><span><i class="fa fa-quote-left"></i></span>Please come and join our website</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
    <div class="single-item">
        <div class="row">
          <div class="col-md-5">
            <div class="profile">
              <div class="img-area">
              
              </div>
              <div class="bio">
                <h3>Jonathan Issac</h3>
                <h4>Trainer</h4>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="content">
              <p><span><i class="fa fa-quote-left"></i></span>Please come and join our website</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
    <div class="single-item">
        <div class="row">
          <div class="col-md-5">
            <div class="profile">
              <div class="img-area">
              
              </div>
              <div class="bio">
                <h3>Bryan Tan</h3>
                <h4>Trainer</h4>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="content">
              <p><span><i class="fa fa-quote-left"></i></span>Please come and join our website</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </section>
  
  <!-- Header Section -->
	<?php include('include/php/footer.php');?>
	<!-- Header Section end -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>