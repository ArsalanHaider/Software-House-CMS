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
<h2 class="subtitle">Enter Details</h2><br/><br/>
<form class="shake" role="form" action="deleteProject.php" method="POST" data-toggle="validator">

<div class="form-group label-floating">
<label class="control-label" for="id">Project Id</label>
<input class="form-control" id="id" type="text" name="id" required data-error="Please enter Id">
<div class="help-block with-errors"></div>
</div>




<div class="form-submit mt-4">
<button class="btn btn-primary" onclick()="return msg();" type="submit" name="delete" id="delete"><i class="material-icons mdi mdi-message-outline"></i>Delete Product</button>
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
    <div class="alert alert-success">Project Deleted</div>
    return true;
}


</script>

<?php
   
if(isset($_POST['delete']))
{

    
    // get id to delete
    $id = $_POST['id'];
    
    // connect to mysql
    
    // mysql delete query 
    $query = "DELETE FROM `projects` WHERE `id` = $id";
    
    $result = mysqli_query($con, $query);
    
    if($result)
    {
        echo '<div class="alert alert-primary">
        <strong>Data Deleted!</strong>.
         </div>';
    }else{
        echo '<div class="alert alert-danger">
        <strong>Data Not Deleted!</strong>.
         </div>';
    }
    mysqli_close($con);
    echo "<script>window.location='deleteProject.php';</script>";

}


?>


<div class="clearfix"></div>
            <!-- Orders -->
            <div class="orders" style="padding: 10px;margin: 30px;">
            
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Project</h4>
                            </div>
                            
                               <div class="table-stats order-table ov-h " style="text-align:center;">
                                    <table class="table ">
                                            <tr>
                                                <th>ID</th>
                                                <th>Project Name</th>
                                                <th>Project Detail</th>
                                                <th>Project Image</th>
                                                <th>Project Year</th>
                                                <th>Project Technology</th>
                                                <th>Project link</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            // Check connection
                                            if ($con->connect_error) {
                                                die("Connection failed: " . $con->connect_error);
                                            }
                                            $sql = "SELECT id,pname,pimage,detail,link,years,techused FROM projects";
                                            $result = $con->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row'
                                                while ($row = $result->fetch_assoc()) {
                                                    $image=$row['pimage'];
                                                 //   echo '<img src="data:image/jpeg;base64,'.base64_encode( $image).'"/>';
                                                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["pname"] . "</td><td>" . $row["years"] . "</td><td>" . $row["techused"] . "</td><td>" . $row["detail"] . "</td><td><img src='data:image/jpeg;base64," .base64_encode( $image). "'/></td><td>" . $row["link"] . "</td></tr>";
                                                }
                                                echo "</table>";
                                            } else {
                                                echo "<tr><td> 0 Result  </td></tr>";
                                            }
                                            $con->close();
                                            ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->
                    </div> <!-- /.col-lg-8 -->
<?php include('footer.php');?>