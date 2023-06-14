<?php
    session_start();
    include('../general/dbcon.php');
    include('../general/sever.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/admin-style.css">
  <link rel="icon" type="image" href="../images/favicon.png">
  <!-- endinject -->
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include('../components/trainer-navbar.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include('../components/trainer-sidebar.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3>
                      <strong>Welcome
                      <?php
                                include('../general/dbcon.php'); 
                              $currentUser = $_SESSION['username'];
                              $sql = "SELECT * FROM trainer WHERE username ='$currentUser'";

                              $gotResuslts = mysqli_query($db,$sql);

                              if($gotResuslts){
                                  if(mysqli_num_rows($gotResuslts)>0){
                                      while($row = mysqli_fetch_array($gotResuslts)){
                                          //print_r($row['user_name']);
                                          ?>
                                 
                                 
                      <?php echo ucfirst($row['firstname']); echo str_repeat('&nbsp;', 1); echo ucfirst($row['lastname']);?>

                                          <?php
                                      }
                                  }
                              }
                              ?></strong>    
                            </h3>
                    
                      
                  
                  
                  </strong></h3>

                    <?php if (isset($_SESSION['success'])) : ?>
                    <div class="error success" >  
                      <h5 style="font-size:10px; position:absolute; color:green;">
                        <?php 
                          echo $_SESSION['success']; 
                          unset($_SESSION['success']);
                        ?>
                      </h5>
                    </div>
                  <?php endif ?>

                  </h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                  <a href="trainer-member.php" style="text-decoration:none; color:white;">
                    <div class="card-body">
                      <p class="mb-4">Total Members</p>
                      <p class="fs-30 mb-2">
                      <?php
                        include('../general/dbcon.php');
                        // Check connection
                        if ($db->connect_error) {
                            die("Connection failed: " . $db->connect_error);                            
                        }
                        $sql = "SELECT COUNT(membership_id)FROM members WHERE members.member_id;";
                        $result = $db->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["COUNT(membership_id)"];
                               
                            }
                        } else {
                            echo "0 results";
                        }

                        $db->close();
                        ?>
                      </p>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                  <a href="trainer-workout-event.php" style="text-decoration:none; color:white;">
                    <div class="card-body">
                      <p class="mb-4">Total Classes</p>
                      <p class="fs-30 mb-2">
                      <?php
                        include('../general/dbcon.php');
                        // Check connection
                        if ($db->connect_error) {
                            die("Connection failed: " . $db->connect_error);


                            
                        }

                        $sql = "SELECT COUNT(event_id)FROM workout_event WHERE workout_event.event_id;";



                        $result = $db->query($sql);

                        

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["COUNT(event_id)"];
                               
                            }
                        } else {
                            echo "0 results";
                        }

                        $db->close();
                        ?>
                      </p>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <a href="#" style="text-decoration:none; color:white;">
                    <div class="card-body">
                      <p class="mb-4">Pay Rate</p>
                      <p class="fs-30 mb-2">A$
                        <?php
                                include('../general/dbcon.php'); 
                              $currentUser = $_SESSION['username'];
                              $sql = "SELECT * FROM trainer WHERE username ='$currentUser'";

                              $gotResuslts = mysqli_query($db,$sql);

                              if($gotResuslts){
                                  if(mysqli_num_rows($gotResuslts)>0){
                                      while($row = mysqli_fetch_array($gotResuslts)){
                                          //print_r($row['user_name']);
                                          ?>
                                 
                                 
                      <?php echo ucfirst($row['hourly_rate']);?> /HR

                                          <?php
                                      }
                                  }
                              }
                              ?></strong>   
  
                      </p>
                    </div>
                    </a>

                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                  <a href="trainer-message.php" style="text-decoration:none; color:white;">
                  <div class="card-body">
                      
                      <p class="mb-4">Messages</p>
                      
                      <p class="fs-30 mb-2">
                      <?php
                        include('../general/dbcon.php');
                        // Check connection
                        if ($db->connect_error) {
                            die("Connection failed: " . $db->connect_error);


                            
                        }

                        $sql = "SELECT COUNT(contact_id)FROM contact WHERE contact.contact_id;";



                        $result = $db->query($sql);

                        

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["COUNT(contact_id)"];
                               
                            }
                        } else {
                            echo "0 results";
                        }

                        $db->close();
                        ?>
                      </p>
                    </div>
                </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                  <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <div class="ml-xl-4 mt-3">
                            <img src="../images/crunch-logo.jpg" style="width:300px; height:200px; object-fit:cover;   box-shadow: 0 0 10px 5px rgb(37, 13, 13);" alt="img">
                            

                            </div>  
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <div class="ml-xl-4 mt-3">
                            <img src="../images/blog2-banner_classes_category_dance.jpeg" style= "  box-shadow: 0 0 10px 5px rgb(37, 13, 13); width:500px; height:200px; object-fit:cover;" alt="img">

                            </div>  
                            </div>
                        </div>
                        
                      </div>
                      <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <div class="ml-xl-4 mt-3">
                            <img src="../images/training_classes3.jpeg" style="width:500px; height:200px; object-fit:cover;   box-shadow: 0 0 10px 5px rgb(37, 13, 13);" alt="img">
                            </div>  
                            </div>
                        </div>
                        
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>


        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <script src="../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>
</html>



