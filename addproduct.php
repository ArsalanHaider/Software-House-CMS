<?php include('header.php')  ?>
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
<h2 class="subtitle">Enter Product Details</h2>
<form class="shake" role="form" method="post" action="" enctype="multipart/form-data" data-toggle="validator">

<div class="form-group label-floating">
<label class="control-label" for="name">Heading</label>
<input class="form-control" id="name" type="text" name="name" required data-error="Please enter Project Name">
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="about">Product Detail</label>
<input class="form-control" id="about" type="detail" name="about" required data-error="Please enter about">
<div class="help-block with-errors"></div>
</div>


<div class="form-group label-floating">
<label class="control-label" for="name">Position</label>

<select  class="form-control" name="positionId">
  <option value="1">1st Row</option>
  <option value="2">2nd Row</option>

</select>
</div>




<div class="form-submit mt-4">   
<button id="submit" type='submit'  class="btn btn-primary" onclick()="return msg();" name='but_upload'><i class="material-icons mdi mdi-message-outline"></i>Add Color</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</form>
</div>
</div>
</div>


<script>
function msg(){
    <div class="alert alert-success">Record inserted</div>
    return true;
}


</script>
</section>



<?php
if(isset($_POST["but_upload"])){
    
        $name = $_POST['name'];
        $about = $_POST['about'];
        $positionId = $_POST['positionId'];
       
        // Check connection
        if($con->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        
        //Insert image content into database
        $insert = $con->query("INSERT into product (name,about,positionId) VALUES ('$name','$about','$positionId')");
        if($insert){
            echo '<div class="alert alert-primary">
                     <strong>Data Added!</strong>.
                   </div>';
    echo "<script>window.location='addproduct.php';</script>";

        }else{
            echo '<div class="alert alert-danger">
                 <strong>Data Not Added!</strong>.
                   </div>';
        } 
    }


?>


<?php include 'footer.php';?>