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
  <title>Edit Event</title>
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
                            $event_id = mysqli_real_escape_string($db, $_GET['id']);
                         
                            $query = "SELECT * 
                            FROM workout_event INNER JOIN trainer ON workout_event.trainer_id = trainer.trainer_id
                            WHERE event_id='$event_id' ";
                            $query_run = mysqli_query($db, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $workout = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">

                                <h3 class="font-weight-bold">
                                            <a href="workout-event.php" style="text-decoration:none; color:black;"> Edit Event / <?=ucfirst($workout['class_name']); ?> - <?=ucfirst($workout['event_date']); ?> 
                                        
                                        </a>
                                        </h3>
                                                <div class="col-12 my-4">
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                    <div class="col-sm pb-3">
                                                    <input type="hidden" name="event_id" value="<?= $workout['event_id']; ?>">
                                                    <label for="username" class="form-label">Event ID</label>
                                                    <input type="text" name="event_id" value="<?=$workout['event_id'];?>" class="form-control" disabled>
                                                    </div>
                                                    <div class="col-sm pb-3">
                                                    <label for="username" class="form-label">Class Name: <?=ucfirst($workout['class_name']); ?></label>
                                                    <select class="form-select form-control"  name="class_name" required>
                                                    <option value="HIIT Training">HIIT Training</option>
                                                    <option value="DANCE Training">DANCE Training </option>
                                                    <option value="FITNESS Training">FITNESS Training </option>
                                                    <option value="FLOW Training">FLOW Training</option>
                                                    <option value="LIIT Training">LIIT Training</option>
                                                    <option value="STRENGTH Training">STRENGTH Training</option>
                                                  </select>
                                              </div>

                                              <div class="col-12">
                                                    <div class="row">
                                                    <div class="col-sm pb-3">
                                                    <label class="form-label">Event Date</label>
                                                    <input type="date" class="form-control"name="event_date" value="<?=$workout['event_date'];?>">
                                                    </div>
                                                    <div class="col-sm pb-3">
                                                    <label class="form-label">Time</label>
                                                    <input type="time" class="form-control" name="time_slot" value="<?=$workout['time_slot'];?>">
                                              </div>

                                              <div class="col-12">
                                                    <div class="row">
                                                    <div class="col-sm pb-3">
                                                    <label class="form-label">Trainer: <?=ucfirst($workout['firstname']); ?></label>
                                                    <select class="form-select form-control"  name="trainer_id" required>
                                                    <option value="5">Jim</option>
                                                    <option value="6">Mike </option>
                                                    <option value="17">Jessica </option>
                                                    <option value="14">Kimberly</option>
                                                    <option value="31">Novak</option>
                                                    <option value="29">Micheal</option>
                                                    <option value="32">Messi</option>
                                                  </select>
                                                    </div>
                                              </div>

                                        

                                            <div class="col-12">
                                                <button type="submit" name="update_event" class="btn-sm btn btn-dark">
                                                    Update Event
                                                </button>
                                                <a type="submit" class="btn btn-sm btn-dark"  href="workout-event.php">Back</a>

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

