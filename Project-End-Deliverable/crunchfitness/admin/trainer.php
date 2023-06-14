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
    <title>Trainer</title>
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
                    <h3 class="font-weight-bold">Trainer Management</h3>
                    <?php include('message.php'); ?>
                    <?php include('errors.php'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title mb-0">Trainer Details</p>
                    <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                            <th>Trainer ID</th>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Hourly Rate</th>
                            <th>Join Date</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                       


                       $query = "SELECT * FROM trainer";
                       $query_run = mysqli_query($db, $query);

                       if(mysqli_num_rows($query_run) > 0)
                       {
                           foreach($query_run as $trainer)
                           {
                               ?>
                               <tr>
                                   <td><?= $trainer['trainer_id']; ?></td>
                                   <td><?= $trainer['username']; ?></td>
                                   <td><?= $trainer['firstname']; ?></td>
                                   <td><?= $trainer['lastname']; ?></td>
                                   <td><?= $trainer['mobile']; ?></td>
                                   <td><?= $trainer['email']; ?></td>
                                   <td><?= $trainer['gender']; ?></td>
                                   <td><?= $trainer['hourly_rate']; ?></td>
                                   <td><?= $trainer['join_date']; ?></td>




                                   <td>
                                       <a href="trainer-edit.php?id=<?= $trainer['trainer_id']; ?>" class="btn btn-dark btn-sm">Edit</a>
                                       <form action="code.php" method="POST" class="d-inline">
                                     <button type="button" class="btn btn-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#staticBackdrop<?=$trainer['trainer_id'];?>">
                                                                     Delete
                                                                   </button>
                                           <!-- Modal -->
                                     <div class="modal fade" id="staticBackdrop<?=$trainer['trainer_id'];?>" data-bs-backdrop="static" value="<?=$trainer['trainer_id'];?>" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                         <div class="modal-content">
                                           <div class="modal-header">
                                             <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Account</h1>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                           </div>
                                           <div class="modal-body">
                                             <p>Deleting <?= ucfirst($trainer['firstname']); ?> account, are you sure?</p>
                                           </div>
                                           <div class="modal-footer">
                                             <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">Close</button>
                                             <button type="submit" name="delete_trainer" value="<?=$trainer['trainer_id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                           </div>
                                         </div>
                                       </div>
                                     </div>
                                       </form>
                                   </td>
                               </tr>
                               <?php
                           }
                       }
                       else
                       {
                           echo "<h5> No Record Found </h5>";
                       }







                       ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 stretch-card">
                  <div class="card-body">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"> + Add Trainer </button>

                                        <!-- Modal -->
                     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">New Trainer</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <div class="container">


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                        <form action="code.php" method="post">
                      
                      <div class="mb-3">
                              <div class="input-group has-validation">
                              <span class="input-group-text">@</span>
                              <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                              <div class="invalid-feedback">
                                  Your username is required.
                              </div>
                              </div>                  
                          </div>

                      <div class="mb-3">
                          <div class="input-group">
                          <span class="input-group-text">Name</span>
                          <input type="text" aria-label="First name" id="firstname" class="form-control"  name="firstname" placeholder="First" required>
                          <input type="text" aria-label="Last name" id="lastname" class="form-control"  name="lastname" placeholder="Last" required>
                          </div>
                          </div>                           
                          <div class="mb-3">
                              <input type="email" class="form-control has-validation" id="exampleInputPassword2" placeholder="Email" name="email" required>
                          </div>
                          <div class="mb-3">
                              <input type="number" class="form-control has-validation" id="exampleFormControlInput2" placeholder="Mobile Number" name="mobile" required>
                          </div>
                          <div class="mb-3">
                              <input type="password" class="form-control has-validation" id="exampleInputPassword1" placeholder="Password" name="password_1" required>
                          </div>
                          <div class="mb-3">
                              <input type="password" class="form-control has-validation" id="exampleInputPassword2" placeholder="Confirm password" name="password_2" required>
                          </div> 
                          <div class="mb-3">
                          <select class="form-select" aria-label="Default select example" name="gender" required>
                                        <option selected disabled> Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                      </select>                            
                                    </div> 

                          <div class="pt-1 mb-4">
                          <button class="btn btn-dark" name="admin_register_trainer" type="submit">Register</button>
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>

                      </div>
                   
            </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                          </div>
                        </div>
                      </div>
                      </div>
                              <!-- Modal ends -->
                    <div class="table-responsive">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- End custom js for this page-->
  </body>
</html>