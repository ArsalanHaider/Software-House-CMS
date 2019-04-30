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
<h2 class="subtitle">Enter Team Details</h2>
<form class="shake" role="form" method="post" action="" enctype="multipart/form-data" data-toggle="validator">

<div class="form-group label-floating">
<label class="control-label" for="name">Name</label>
<input class="form-control" id="name" type="text" name="name" required data-error="Please enter Project Name">
<div class="help-block with-errors"></div>
</div>



<div class="form-group label-floating">
<label class="control-label" for="designation">Designation</label>
<input class="form-control" id="designation" type="detail" name="designation" required data-error="Please enter designation">
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="image">Image</label>
<input class="form-control" type="file" name="image" id="image" required data-error="Please Select Image">
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="fblink">FB LINK</label>
<input class="form-control" id="fblink" type="text" name="fblink" required data-error="Please enter fblink">
<div class="help-block with-errors"></div>
</div>


<div class="form-group label-floating">
<label class="control-label" for="lnlink">LINKEDLN LINK</label>
<input class="form-control" id="lnlink" type="text" name="lnlink" required data-error="Please enter lnlink">
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="twlink">TWITTER LINK</label>
<input class="form-control" id="twlink" type="text" name="twlink" required data-error="Please enter twlink">
<div class="help-block with-errors"></div>
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
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $name = $_POST['name'];
        $designation = $_POST['designation'];
        $fblink = $_POST['fblink'];
        $twlink = $_POST['twlink'];
        $lnlink = $_POST['lnlink'];
        /*
         * Insert image data into database
         */
        
        
        // Check connection
        if($con->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        
        //Insert image content into database
        $insert = $con->query("INSERT into team (name,designation,images,fblink,twlink,lnlink) VALUES ('$name','$designation','$imgContent','$fblink','$twlink','$lnlink')");
        if($insert){
            echo '<div class="alert alert-primary">
                     <strong>Data Added!</strong>.
                   </div>';
        }else{
            echo '<div class="alert alert-danger">
                 <strong>Data Not Added!</strong>.
                   </div>';
        } 
    }else{
        echo "Please select an image file to upload.";
    }
    echo "<script>window.location='addteam.php';</script>";

}
?>


<?php include 'footer.php';?>