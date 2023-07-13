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

    <form action="" method="POST" enctype="multipart/form-data">
    <?php 
 //if(isset($_GET['id'])){
    if(isset($_POST['btn_viewMemDetails'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM membership WHERE id LIKE '%$id%'";
        //$sql = "SELECT * FROM membership where id='{$_GET['id']}'";
        $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {

            /*
    if(isset($_GET['id'])){
    $plan = $conn->query("SELECT * FROM plan_list where plan_id = '{$_GET['id']}' ");
    $res = $plan->fetchArray();
    if($res){
        foreach($res as $k=> $v){
            $$k = $v;
        }
    }
}else{
    echo '<script>alert("Plan ID is required on this page.");location.replace("./")</script>';
}
*/
?>

<div class="col-12 pb-5">
    <div class="card rounded-0 shadow">
        <div class="card-body rounded-0">
            <h2 class="text-center fs-1"><?php echo $row['name']; ?></h2>
            <center><hr class="bg-primary opacity-100" width="50px"></center>
            <center>
                <span class="fw-bold fs-4 plan-currency"><sup>RM</sup></span>
                <span class="fw-bolder fs-2 plan-price"><?php echo $row['price']; //echo number_format($current_price) ?></span>
                <br>
                <hr>
            </center>
            <div>
            <?php echo $row['description']; //echo html_entity_decode($description) ?>
            </div>
        </div>
        <div class="card-footer rounded-0 bg-white text-center">
            <button type="submit" name="btn_apply" id="btn_apply" class="btn_apply btn btn-primary btn-lg rounded-pill col-md-4" formaction="apply.php?id=<?php echo $row['id']; ?>">Apply Now</button>
            <!--<a href="./?page=apply&id=<?php echo $_GET['id'] ?>" class="btn btn-primary btn-lg rounded-pill col-md-4">Apply Now</a>-->
            <br>
            <span class="text-muted"><small><i>Send us your application</i></small></span>
        </div>
    </div>
</div>

<!--
    <div class="col-12 pb-5">
    <div class="card rounded-0 shadow">
        <div class="card-body rounded-0">
            <h2 class="text-center fs-1"><?php echo $title ?></h2>
            <center><hr class="bg-primary opacity-100" width="50px"></center>
            <center>
                <span class="fw-bold fs-4 plan-currency"><sup>$</sup></span>
                <span class="fw-bolder fs-2 plan-price"><?php echo number_format($current_price) ?></span>
                <span class="text-muted"><sub>/<?php echo $subscription_type ?></sub></span>
                <?php if($before_price > 0): ?>
                <span class="text-muted">
                    <span class="fw-bold fs-6"><sup>$</sup></span>
                    <span class="fw-bolder fs-5  text-decoration-line-through"><?php echo number_format($before_price) ?></span>
                    <span class="text-muted"><sub>Before</sub></span>
                </span>
                <?php endif; ?>
                <br>
                <hr>
            </center>
            <div>
            <?php echo html_entity_decode($description) ?>
            </div>
        </div>
        <div class="card-footer rounded-0 bg-white text-center">
            <a href="./?page=apply&id=<?php echo $_GET['id'] ?>" class="btn btn-primary btn-lg rounded-pill col-md-4">Apply Now</a><br>
            <span class="text-muted"><small><i>Send us your application</i></small></span>
        </div>
    </div>
</div>
-->
<?php
}
}
}else{
    echo '<script>alert("ID is required on this page.");location.replace("./Membership.php")</script>';
}
?>
    </form>

  <!-- Footer Section -->
	<?php include('include/php/footer.php');?>
	<!-- Footer Section end -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>