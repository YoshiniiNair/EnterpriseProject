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

    <section id="apply-form">
    <form action="" method="POST" enctype="multipart/form-data">
    <?php 
    if(isset($_POST['btn_apply'])){
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
    $plan = $conn->query("SELECT * FROM membership where id = '{$_GET['id']}' ");
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

    <h2 class="text-center fs-1">Membership Subscription Application Form</h2>
    <center><hr class="bg-primary opacity-100" width="50px"></center>
<div class="col-12 py-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow rounded-0">
                <div class="card-body rounded-0 py-5">
                    <form action="" id="application-form">
                        <input type="hidden" name="plan_id" value="<?php echo $plan_id ?>">
                        <fieldset>
                            <legend class="text-center">Applicant Details</legend>
                            <center><hr class="bg-primary opacity-100" width="100px"></center>
                            <!--
                            <div class="form-group mb-4">
                                <div class="row mx-0">
                                    <div class="col-md-4">
                                        <label for="memberhsip" class="control-label text-muted">Membership Package</label>
                                        <input type="text" class="form-control rounded-0 border-0 border-bottom" id="membership" name="membership" value="<?php echo $row['name'];?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="price" class="control-label text-muted">Price</label>
                                        <input type="text" class="form-control rounded-0 border-0 border-bottom" id="price" name="price" value="<?php echo $row['price'];?>" disabled>
                                    </div>
                                </div>
                            </div>
                            -->
                            <div class="form-group mb-4">
                                <div class="row mx-0">
                                    <!--
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label text-muted">Last Name</label>
                                        <input type="text" class="form-control rounded-0 border-0 border-bottom" id="lastname" name="lastname" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="firstname" class="control-label text-muted">First Name</label>
                                        <input type="text" class="form-control rounded-0 border-0 border-bottom" id="firstname" name="firstname" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="middlename" class="control-label text-muted">Middle Name</label>
                                        <input type="text" class="form-control rounded-0 border-0 border-bottom" id="middlename" name="middlename" placeholder="(optional)">
                                    </div>
                                    -->
                                    <div class="col-md-4">
                                        <label for="name" class="control-label text-muted">Name</label>
                                        <input type="text" class="form-control rounded-0 border-0 border-bottom" id="name" name="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="row mx-0">
                                    <div class="col-md-6">
                                        <label for="gender" class="control-label text-muted">Gender</label>
                                        <select class="form-select rounded-0 border-0 border-bottom" id="gender" name="gender" required> 
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="date_of_birth" class="control-label text-muted">Date of Birth</label>
                                        <input type="date" class="form-control rounded-0 border-0 border-bottom" id="date_of_birth" name="date_of_birth" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="row mx-0">
                                    <div class="col-md-6">
                                        <label for="email" class="control-label text-muted">Email</label>
                                        <input type="email" class="form-control rounded-0 border-0 border-bottom" id="email" name="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contact" class="control-label text-muted">Contact #</label>
                                        <input type="text" class="form-control rounded-0 border-0 border-bottom" id="contact" name="contact" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="row mx-0">
                                    <div class="col-md-12">
                                        <label for="address" class="control-label text-muted">Address</label>
                                        <textarea rows="3" class="form-control rounded-0 border-0 border-bottom" id="address" name="address" required placeholder="i.e. Block 6 Lot 23, Here Village, There City" style="resize:none"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="form-group mb-4">
                                <div class="row mx-0">
                                    <div class="col-md-12">
                                        <label for="occupation" class="control-label text-muted">Occupation</label>
                                        <input type="text" class="form-control rounded-0 border-0 border-bottom" id="occupation" name="occupation" required>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-md-12">
                                        <label for="company_name" class="control-label text-muted">Company Name</label>
                                        <input type="text" class="form-control rounded-0 border-0 border-bottom" id="company_name" name="company_name" required>
                                    </div>
                                </div>
                            </div>
                            -->
                            <div class="form-group text-center mt-5">
                                <button type="submit" name="btn_submit" id="btn_submit" class="btn_submit btn btn-lg btn-primary w-50 rounded-pill" formaction="actions2.php?id=<?php echo $row['id']; ?>">Submit Application</button>
                                <button type="submit" class="btn_submit btn btn-lg btn-primary w-50 rounded-pill" name="btn_submit" id="btn_submit">Submit Application</button>
                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card rounded-0 shadow">
                <div class="card-header rounded-0 bg-white">
                    <h5 class="card-title">
                    Plan to Apply
                    </h5>
                </div>
                <div class="card-body rounded-0 py-5">
                    <h2 class="text-center fs-4"><?php echo $row['name']; //echo $title ?></h2>
                    <center><hr class="bg-primary opacity-100" width="50px"></center>
                    <center>
                        <span class="fw-bold fs-4 plan-currency"><sup>RM</sup></span>
                        <span class="fw-bolder fs-2 plan-price"><?php echo $row['price'];//echo number_format($current_price) ?></span>
                        <!--<span class="text-muted"><sub>/<?php echo $row['']; //echo $subscription_type ?></sub></span>-->
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('#application-form').submit(function(e){
            e.preventDefault();
            $('.pop_msg').remove()
            var _this = $(this)
            var _el = $('<div>')
                _el.addClass('pop_msg')
            _this.find('button').attr('disabled',true)
            var btn_otxt = _this.find('button[type="submit"]').text()
            _this.find('button[type="submit"]').text('Please Wait...')
            $.ajax({
                url:'actions.php?a=save_application',
                method:'POST',
                data:$(this).serialize(),
                dataType:'JSON',
                error:err=>{
                    console.log(err)
                    _el.addClass('alert alert-danger')
                    _el.text("An error occurred.")
                    _this.prepend(_el)
                    _el.show('slow')
                     _this.find('button').attr('disabled',false)
                     _this.find('button[type="submit"]').text(btn_otxt)
                },
                success:function(resp){
                    if(resp.status == 'success'){
                            location.href='./?page=view_plan&id=<?php echo $_GET['id'] ?>';
                    }else{
                        _el.addClass('alert alert-danger')
                    }
                    _el.text(resp.msg)

                    _el.hide()
                    _this.prepend(_el)
                    _el.show('slow')
                    $('html,body').animate({scrollTop:$('form').offset().top - 50},'fast')
                     _this.find('button').attr('disabled',false)
                     _this.find('button[type="submit"]').text(btn_otxt)
                }
            })
        })
    })
</script>
<?php
}
}
    }
?>
    </form>
    </section>

  <!-- Footer Section -->
	<?php include('include/php/footer.php');?>
	<!-- Footer Section end -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>