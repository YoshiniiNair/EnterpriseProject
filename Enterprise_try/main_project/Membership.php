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
  <title>Sports Management Business</title>
</head>
<body>
  <!-- Header Section -->
	<?php include('include/php/header.php');?>
	<!-- Header Section end -->

    <h2 class="text-center fs-1">Membership Plans</h2>
    <center><hr class="bg-primary opacity-100" width="50px"></center>
    
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3 gx-5 gy-5">
    <?php 
    $sql = "SELECT * FROM membership";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
    ?>
    <div class="col">
        <div class="card shadow rounded-0 h-100">
            <div class="card-body rounded-0">
                <h5 class="card-title text-muted text-center"><?php echo $row['name'] ?></h5>
                <center><hr class="bg-primary opacity-100" width="30px"></center>
                <center>
                    <span class="fw-bold fs-4 plan-currency"><sup>RM</sup></span>
                    <span class="fw-bolder fs-2 plan-price"><?php echo $row['price'];//echo number_format($row['current_price']) ?></span>
                    <span class="text-muted">
                        <span class="fw-bolder fs-5"><?php echo $row['description']; ?></span>
                    </span>
                </center>
                <hr>
                <div class="text-muted truncate-8">
                    <?php echo $row['description']; //echo html_entity_decode($row['description']) ?>
                </div>
            </div>
            <div class="card-footer rounded-0 bg-white text-center">
                <!--<a href="./?page=view_membership&id=<?php echo $row['id']; ?>" class="btn btn-primary rounded-pill w-75">Learn More</a>-->
                <!--<a href="./view_membership.php?id=<?php echo $row['id']; ?>" name="btn_viewMemDetails" id="btn_viewMemDetails" class="btn_viewMemDetails btn btn-primary rounded-pill w-75">Learn More</a>-->
                <button type="submit" name="btn_viewMemDetails" id="btn_viewMemDetails" class="btn_viewMemDetails btn btn-primary rounded-pill w-75" formaction="view_membership.php?id=<?php echo $row['id']; ?>">Learn More</button>
            </div>
        </div>
    </div>

    <!--
    <div class="col">
        <div class="card shadow rounded-0 h-100">
            <div class="card-body rounded-0">
                <h5 class="card-title text-muted text-center"><?php echo $row['title'] ?></h5>
                <center><hr class="bg-primary opacity-100" width="30px"></center>
                <center>
                    <span class="fw-bold fs-4 plan-currency"><sup>$</sup></span>
                    <span class="fw-bolder fs-2 plan-price"><?php echo number_format($row['current_price']) ?></span>
                    <span class="text-muted"><sub>/<?php echo $row['subscription_type'] ?></sub></span>
                    <?php if($row['before_price'] > 0): ?>
                    <br>
                    <span class="text-muted">
                        <span class="fw-bold fs-6"><sup>$</sup></span>
                        <span class="fw-bolder fs-5  text-decoration-line-through"><?php echo number_format($row['before_price']) ?></span>
                        <span class="text-muted"><sub>Before</sub></span>
                    </span>
                    <?php endif; ?>
                </center>
                <hr>
                <div class="text-muted truncate-8">
                    <?php echo html_entity_decode($row['description']) ?>
                </div>
            </div>
            <div class="card-footer rounded-0 bg-white text-center">
                    <a href="./?page=view_plan&id=<?php echo $row['plan_id'] ?>" class="btn btn-primary rounded-pill w-75">Learn More</a>
            </div>
        </div>
    </div>
    -->
    <?php }} ?>
</div>
    </form>

  <!-- Footer Section -->
	<?php include('include/php/footer.php');?>
	<!-- Footer Section end -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>