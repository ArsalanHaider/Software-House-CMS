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
<form class="shake" role="form" action="addContact.php" method="post" data-toggle="validator">

<div class="form-group label-floating">
<label class="control-label" for="name">name</label>
<input class="form-control" id="code" type="text" name="names" required data-error="Please enter name">
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="email">email</label>
<input class="form-control" id="hcode" type="text" name="email" required data-error="Please enter email">
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="email">subject</label>
<input class="form-control" id="hcode" type="text" name="subject" required data-error="Please enter subject">
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="email">message</label>
<input class="form-control" id="hcode" type="text" name="messages" required data-error="Please enter message">
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
    $name = $_POST['names'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $messages = $_POST['messages'];

    $query = "INSERT INTO contactus(names,email,subjects,messages) VALUES ('$name','$email','$subject','$messages')";
   $result= mysqli_query($con,$query);
    if($result)
    {
        echo '<div class="alert alert-primary">
        <strong>Data Added!</strong>.
         </div>';
        echo "<script>window.location='addContact.php';</script>";

    }else{
        echo '<div class="alert alert-danger">
        <strong>Data Not Added!</strong>.
         </div>';
    }
    echo "000000000";

  }
 

?>

<?php include('footer.php');?>