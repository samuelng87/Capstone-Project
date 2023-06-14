
<?php
    session_start();
    include('../general/dbcon.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Messages</title>
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
                    <h3 class="font-weight-bold">Contact Messages</h3>
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
                    <p class="card-title mb-0"> Total <span style="color:green">
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
                        </span> Enquires
                    </p>
                    <div class="table-responsive">

                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                          <th></th>
                            <th>Message ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Date</th>



                          </tr>
                        </thead>
                        <tbody>

                            <?php 
                                   include('../general/dbcon.php');

                                    $query = "SELECT * FROM contact";
                                    $query_run = mysqli_query($db, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $contact)
                                        {
                                            ?>
                                            <tr>
                                            <td>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_message" value="<?=$contact['contact_id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                                <td><?= $contact['contact_id']; ?></td>
                                                <td><?= $contact['firstname']; ?></td>
                                                <td><?= $contact['lastname']; ?></td>
                                                <td><?= $contact['subject_contact']; ?></td>
                                                <td><?= $contact['message_contact']; ?></td>
                                                <td><?= $contact['email']; ?></td>
                                                <td><?= $contact['mobile']; ?></td>
                                                <td><?= $contact['date']; ?></td>



  
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
                    <div class="table-responsive">
                  </div>
                </div>
              </div>
              <?php


?>
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





