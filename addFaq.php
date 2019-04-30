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
<form class="shake" role="form" action="addFaq.php" method="post" data-toggle="validator">

<div class="form-group label-floating">
<label class="control-label" for="question">Question</label>
<input class="form-control" rows="3" id="question" type="text" name="question" required data-error="Please enter question">
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="answer">Answer</label>
<textarea class="form-control" rows="3" id="answer" type="text" name="answer" required data-error="Please enter answer"></textarea>
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
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $query = "INSERT INTO faq(question,answer) VALUES ('$question','$answer')";
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
    echo "<script>window.location='addFaq.php';</script>";
  }
 

?>

<?php include('footer.php');?>