
    <?php include('header.php')  ?>
    <?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
<body>

<?php include('sidebar.php')  ?>

        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                    <div class="text-left dib">
                                        <?php
                                        foreach ($con->query('SELECT COUNT(*) FROM contactus') as $row) {
                                            foreach ($row as $key => $val) {
                                                echo "<div class='stat-text'><span class='count'>$val</span></div>";
                                            }
                                        }
                                        ?>
                                        <div class="stat-heading">Total Contact Requests</div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                    <div class="text-left dib">
                                        <?php
                                        foreach ($con->query('SELECT COUNT(*) FROM projects') as $row) {
                                            foreach ($row as $key => $val) {
                                                echo "<div class='stat-text'><span class='count'>$val</span></div>";
                                            }
                                        }
                                        ?>
                                        <div class="stat-heading">Total Project Deployed</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                    <div class="text-left dib">
                                        <?php
                                        foreach ($con->query('SELECT COUNT(*) FROM brandslogo') as $row) {
                                            foreach ($row as $key => $val) {
                                                echo "<div class='stat-text'><span class='count'>$val</span></div>";
                                            }
                                        }
                                        ?>
                                        <div class="stat-heading">Total Brands Served</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-5">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                    <div class="text-left dib">
                                        <?php
                                        foreach ($con->query('SELECT COUNT(*) FROM users') as $row) {
                                            foreach ($row as $key => $val) {
                                                echo "<div class='stat-text'><span class='count'>$val</span></div>";
                                            }
                                        }
                                        ?>
                                        <div class="stat-heading">Total Users</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-6">
                                        <i class="pe-7s-flag"></i>
                                    </div>
                                    <div class="stat-content">
                                    <div class="text-left dib">
                                        <?php
                                        foreach ($con->query('SELECT COUNT(*) FROM testimonial') as $row) {
                                            foreach ($row as $key => $val) {
                                                echo "<div class='stat-text'><span class='count'>$val</span></div>";
                                            }
                                        }
                                        ?>
                                        <div class="stat-heading">Total Testimonials</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-diamond"></i>
                                    </div>
                                    <div class="stat-content">
                                    <div class="text-left dib">
                                        <?php
                                        foreach ($con->query('SELECT COUNT(*) FROM banner') as $row) {
                                            foreach ($row as $key => $val) {
                                                echo "<div class='stat-text'><span class='count'>$val</span></div>";
                                            }
                                        }
                                        ?>
                                        <div class="stat-heading">Total Banners</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

     
                
      
                <!-- /Widgets -->
             
              
        <!-- /.content -->
        <div class="clearfix"></div>
        <?php include('footer.php')  ?>
