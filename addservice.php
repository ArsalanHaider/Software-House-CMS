<?php include('header.php'); ?>

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

<div class="row mt-12">
<div class="col-md-12  wow fadeInUp animated" data-wow-delay=".5s">
<h2 class="subtitle">Enter Details</h2><br/><br/>
<form class="shake" role="form" action="addservice.php" method="post" data-toggle="validator">

<div class="form-group label-floating">
<label class="control-label" for="icon">icon</label>
<input class="form-control" rows="3" id="icon" type="text" name="icon" required data-error="Please enter icon">
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="title">title</label>
<textarea class="form-control" rows="3" id="title" type="text" name="title" required data-error="Please enter title"></textarea>
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="descriptions">descriptions</label>
<textarea class="form-control" rows="3" id="descriptions" type="text" name="descriptions" required data-error="Please enter descriptions"></textarea>
<div class="help-block with-errors"></div>
</div>

<div class="form-submit mt-4">
<button class="btn btn-primary" onclick()="return msg();" type="submit" name="submit" id="submit"><i class="material-icons mdi mdi-message-outline"></i>Add FAQ</button>
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
 
 
 // // Create connection
 
if(isset($_POST['submit'])){

    // Insert record
    $icon = $_POST['icon'];
    $title = $_POST['title'];
    $descriptions = $_POST['descriptions'];

    $query = "INSERT INTO service(icon,title,descriptions) VALUES ('$icon','$title','$descriptions')";
    $result = mysqli_query($con,$query);
    if($result)
    {
        echo '<div class="alert alert-primary">
        <strong>Data Added!</strong>.
         </div>';
    }else{
        echo '<div class="alert alert-danger">
        <strong>Data Not Added!</strong>.
         </div>';
    }
    echo "<script>window.location='addservice.php';</script>";
  }
 

?>

<?php include('footer.php');?>