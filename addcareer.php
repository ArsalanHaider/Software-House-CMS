<?php include('header.php');  ?>
<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
<body>

<?php include('sidebar.php')  ?>


<section class="Material-contact-section section-padding">
<div class="container">

<div class="row mt-5">
<div class="col-md-6  wow fadeInUp animated" data-wow-delay=".5s">
<h2 class="subtitle">Enter Details</h2><br/><br/>
<form class="shake" role="form" action="addcareer.php" method="post" data-toggle="validator">

<div class="form-group label-floating">
<label class="control-label" for="name">designation</label>
<input class="form-control" id="designation" type="text" name="designation" required data-error="Please enter designation">
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="experience">experience</label>
<input class="form-control" id="experience" type="text" name="experience" required data-error="Please enter experience">
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="skills">skills</label>
<input class="form-control" id="skills" type="text" name="skills" required data-error="Please enter skills">
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="descriptions">description</label>
<textarea class="form-control" id="descriptions" rows="3" type="text" name="descriptions" required data-error="Please enter message"></textarea>
<div class="help-block with-errors"></div>
</div>

<div class="form-submit mt-4">
<button class="btn btn-primary" onclick()="return msg();" type="submit" name="submit" id="submit"><i class="material-icons mdi mdi-message-outline"></i>Submit</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</form>
</div>
</div>
</div>
</section>
<script>
function msg(){
    <div class="alert alert-success">Record inserted</div>
    return true;
}


</script>

<?php

if(isset($_POST['submit'])){

    // Insert record
    $designation = $_POST['designation'];
    $experience = $_POST['experience'];
    $skills = $_POST['skills'];
    $descriptions = $_POST['descriptions'];

    $query = "INSERT INTO career(designation,experience,skills,descriptions) VALUES ('$designation','$experience','$skills','$descriptions')";
   $result= mysqli_query($con,$query);
    if($result)
    {
        echo '<div class="alert alert-primary">
        <strong>Data Added!</strong>.
         </div>';
        echo "<script>window.location='addcareer.php';</script>";

    }else{
        echo '<div class="alert alert-danger">
        <strong>Data Not Added!</strong>.
         </div>';
    }
    echo "000000000";

  }
 

?>

<?php include('footer.php');?>