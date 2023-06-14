<?php 
  session_start(); 
  include('../general/dbcon.php'); 
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@300&family=Open+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  </head>
  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <i class="bi bi-arrow-up"></i>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
      </svg>
    </button>
    <!-- /scroll up -->
    <header>
    <?php include('../components/member-navbar.php'); ?>
    </header>
    <!-- /navbar -->
    <main>
      <section class="member-dashboard">

 

      <?php
      $currentUser = $_SESSION['username'];
      $sql = "SELECT * FROM members INNER JOIN membership ON members.membership_id = membership.membership_id WHERE username ='$currentUser'";
      $gotResuslts = mysqli_query($db,$sql);
      if($gotResuslts){
          if(mysqli_num_rows($gotResuslts)>0){
              while($row = mysqli_fetch_array($gotResuslts)){
                  ?>


        <div class="container">    
            <div class="row">
              <div class="col-sm">             
                <div class="card w-100" style="border-radius: 1rem; box-shadow: 0 0 9px 1px rgb(15, 6, 6)">
               <div class="d-flex profile-img">
                <div class="dashboard-img">
                <img src="../public/userImages/<?php print_r($row['user_image']); ?>">                
              </div>
                <div class="d-flex justify-content-center align-items-center w-100">
                  <div class="profile-content">  
                    <h1 class="fw-normal p-3" style="letter-spacing: 1px;">
                    <p><strong>
                    
                    <?php echo ucfirst($row['firstname']); echo str_repeat('&nbsp;', 1); echo ucfirst($row['lastname']);?>

                  </strong></p>

                               <!-- logged in user information -->

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
                  </h1>
                  </div>
                </div>
               </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3 mt-3">
                <div class="card w-100" style="border-radius: 1rem; box-shadow: 0 0 9px 1px rgb(15, 6, 6)">
                  <h3 class="fw-normal m-2 p-2" style="letter-spacing: 1px;">Profile Status</h3>
                  <div class="dashboard-content">
                    <p class="fw-normal" style="letter-spacing: 1px;">Age: <?php echo $row['age']; ?></p>
                    <p class="fw-normal" style="letter-spacing: 1px;">Weight: <?php echo $row['m_weight']; ?> </p>
                    <p class="fw-normal" style="letter-spacing: 1px;">Height: <?php echo $row['height']; ?> </p>
                    <p class="fw-normal" style="letter-spacing: 1px;">Gender: <?php echo ucfirst($row['gender']); ?> </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-9 mt-3 d-flex">
                <div class="card w-100" style="border-radius: 1rem; box-shadow: 0 0 9px 1px rgb(15, 6, 6)">
                  <h3 class="fw-normal m-2 p-2" style="letter-spacing: 1px;">Membership Status</h3>
                  <div class="row">
                    <div class="col">
                      <div class="dashboard-content">
                        <p class="fw-normal" style="letter-spacing: 1px;">Status: <span class="text-success"><?php echo ucfirst($row['status']); ?></span></p> 
                        <p class="fw-normal" style="letter-spacing: 1px;">Membership Package: <?php echo $row['Name']; ?></p>
                        <p class="fw-normal" style="letter-spacing: 1px;">Membership Plan: One Year</p>
                      </div>
                    </div>
                    <div class="col">
                      <div class="dashboard-content">
                        <p class="fw-normal" style="letter-spacing: 1px;">Payment:<?php echo $row['membership_price']; ?>/week</p>
                        <p class="fw-normal" style="letter-spacing: 1px;">Start: <?php echo $row['startdate']; ?></p>
                        <p class="fw-normal" style="letter-spacing: 1px;">End: <?php echo $row['enddate'] = date('Y-m-d', strtotime('+1 year', strtotime($row['startdate']))); ?> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm mt-3">
                <div class="card w-100" style="border-radius: 1rem; box-shadow: 0 0 9px 1px rgb(15, 6, 6)">
                  <h3 class="fw-normal m-2 p-2" style="letter-spacing: 1px;">Workout Event</h1>
                    <div class="row">
                      <div class="col">
                        <div class="class-content overflow-auto m-1" style="height:340px; ">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">
                                <span class="text-success" style="font-size:20px;">
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
                                </span>  
                                 Classes Available
                                </th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Trainer</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                        include('../general/dbcon.php');
                        // Check connection
                        if ($db->connect_error) {
                            die("Connection failed: " . $db->connect_error);


                            
                        }

                        $sql = "SELECT event_id, class_name, event_date, time_slot, trainer.firstname, trainer.mobile
                        FROM workout_event 
                        INNER JOIN trainer ON trainer.trainer_id = workout_event.trainer_id 
                        WHERE workout_event.trainer_id;";



                        $result = $db->query($sql);

                        

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                <td>" . $row["class_name"]. "</td>
                                <td> " . $row["event_date"]. "</td>
                                <td> " . $row["time_slot"]. "</td>
                                <td> " . $row["firstname"]. "</td>
                                

                                </tr>";

            

                            }
                        } else {
                            echo "0 results";
                        }

                        $db->close();
                        ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>                
                  </div>
              </div>
              <div class="col-sm-4 mt-3">
                <div class="card w-100 dashboard-calender" style="border-radius: 1rem;">
                  <div style="border-radius: 1rem; box-shadow: 0 0 9px 1px rgb(15, 6, 6)" class="calendar"></div>

                </div>
              </div>
            </div>
            
          </div>

    


      </section>





                  <?php
              }
          }
      }


      ?>


      
    </main>

  </body>
  <script src="../js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>




