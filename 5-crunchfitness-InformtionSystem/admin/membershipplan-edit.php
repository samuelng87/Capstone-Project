<?php
session_start();
require '../general/dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Membership Plan Edit</title>
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
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include('../components/admin-navbar.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
    <?php include('../components/admin-sidebar.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <?php
                        if(isset($_GET['id']))
                        {
                            $membership_id = mysqli_real_escape_string($db, $_GET['id']);
                            $query = "SELECT * FROM membership WHERE membership_id='$membership_id' ";
                            $query_run = mysqli_query($db, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $membership = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">

                                <h3 class="font-weight-bold">
                                            <a href="membership-valid.php" style="text-decoration:none; color:black;"> Edit  Membership Package / <?=ucfirst($membership['Name']); ?> </a>
                                                </h3>
                                                <div class="col-12 my-4">
                                                </div>
                                              
                                                <div class="col-12">
                                                <div class="row">
                                                <div class="col-sm pb-3">
                                                <input type="hidden" name="membership_id" value="<?= $membership['membership_id']; ?>">
                                                    <label for="username" class="form-label">Membership ID</label>
                                                    <input type="text"  value="<?=$membership['membership_id'];?>" class="form-control" disabled>
                                                </div>
                                                <div class="col-sm pb-3">
                                                <label for="username" class="form-label">Period</label>
                                                    <input type="number" value="<?=$membership['period'];?>" name="period" class="form-control">
                                                </div>
                                              </div>
                                              </div>


                                              <div class="col-12">
                                                <div class="row">
                                                <div class="col-sm pb-3">                                                  
                                                    <label class="form-label">Weekly Price</label>
                                                    <input type="number" class="form-control" name="membership_price" value="<?=$membership['membership_price'];?>" >
                                                </div>
                                                <div class="col-sm pb-3">
                                                <label class="form-label">Sign Up fees</label>
                                                    <input type="number" class="form-control" name="signup_fees" value="<?=$membership['signup_fees'];?>">
                                                </div>
                                              </div>
                                              </div>

                                              <div class="col-12">
                                                <div class="row">
                                                <div class="col-sm pb-3">
                                                <label class="form-label">Package Name</label>
                                                    <input type="text" class="form-control"name="Name" value="<?=$membership['Name'];?>">
                                                </div>
                                        
                                              </div>
                                              </div>




                                              <div class="col-12 my-4">

                                              <button type="submit" name="update_membershipplan" class="btn-sm btn btn-dark">
                                                    Update Package
                                                </button>
                                                <a type="submit" class="btn btn-sm btn-dark"  href="membership-plan.php">Back</a>


                                                </div>
                                             




                                              
 


                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                
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

