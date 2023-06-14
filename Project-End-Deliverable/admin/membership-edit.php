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
  <title>Edit Members Membership</title>
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
                            $member_id = mysqli_real_escape_string($db, $_GET['id']);
                            $query = "SELECT * FROM members  INNER JOIN membership ON members.membership_id = membership.membership_id WHERE member_id='$member_id' ";
                            $query_run = mysqli_query($db, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $member = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">

                                <h3 class="font-weight-bold">
                                            <a href="membership-valid.php" style="text-decoration:none; color:black;"> Edit Member Membership / <?=ucfirst($member['firstname']); ?> <?=ucfirst($member['lastname']); ?> </a>
                                                </h3>
                                                <div class="col-12 my-4">
                                                    <img src="../public/userImages/<?php print_r($member['user_image']); ?>" style="width:150px; height:150px; object-fit:cover; border-radius:50%;" alt="no profile picture">
                                                </div>
                                              
                                                <div class="col-12">
                                                <div class="row">
                                                <div class="col-sm pb-3">
                                                <input type="hidden" name="member_id" value="<?= $member['member_id']; ?>">
                                                    <label for="username" class="form-label">Member ID</label>
                                                    <input type="text"  value="<?=$member['member_id'];?>" class="form-control" disabled>
                                                </div>
                                                <div class="col-sm pb-3">
                                                <label for="username" class="form-label">Username</label>
                                                    <input type="text" value="<?=$member['username'];?>" class="form-control" disabled>
                                                </div>
                                              </div>
                                              </div>


                                              <div class="col-12">
                                                <div class="row">
                                                <div class="col-sm pb-3">                                                  
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" class="form-control" value="<?=$member['firstname'];?>" disabled>
                                                </div>
                                                <div class="col-sm pb-3">
                                                <label class="form-label">Last Name</label>
                                                    <input type="name" class="form-control" value="<?=$member['lastname'];?>"disabled>
                                                </div>
                                              </div>
                                              </div>

                                              <div class="col-12">
                                                <div class="row">
                                                <div class="col-sm pb-3">
                                                <label class="form-label">Start Date</label>
                                                    <input type="date" class="form-control"name="startdate" value="<?=$member['startdate'];?>">
                                                </div>
                                                <div class="col-sm pb-3">
                                                <label class="form-label">End Date</label>
                                                    <input type="date" class="form-control" value="<?=$member['enddate'] = date('Y-m-d', strtotime('+1 year', strtotime($member['startdate']))); ?>" disabled>
                                                </div>
                                              </div>
                                              </div>

                                              <div class="col-12">
                                                <div class="row">
                                                <div class="col-sm pb-3">
                                                <label class="form-label">Membership Type</label>
                                                    <select class="form-select form-control"  name="membership_id" required>
                                                    <option selected disabled value="<?=$member['membership_id'];?>"><?=ucfirst($member['Name']); ?></option>
                                                    <option value="500">Base Membership</option>
                                                    <option value="501">Peak Membership</option>
                                                    <option value="502">Summit Membership</option>
                                                  </select>

                                                </div>
                                                <div class="col-sm pb-3">
                                                <label class="form-label">Status</label>
                                                    <select class="form-select form-control"  name="status" required>
                                                    <option selected disabled value="<?=ucfirst($member['status']); ?>"> <?=ucfirst($member['status']); ?></option>
                                                    <option value="Active">Active</option>
                                                    <option value="Expired">Expired</option>
                                                    <option value="Cancelled">Cancelled</option>
                                                    </select>
                                                </div>
                                              </div>
                                              </div>

                                              <button type="submit" name="update_membership" class="btn-sm btn btn-dark">
                                                    Update Membership
                                                </button>
                                                <a type="submit" class="btn btn-sm btn-dark"  href="membership-valid.php">Back</a>


                                              
 


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

