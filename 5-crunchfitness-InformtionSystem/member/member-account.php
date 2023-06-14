
<?php 
  session_start(); 
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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
      <section class="member-account">
        <div class="container py-3">
          <div class="row d-flex align-items-start justify-content-bottom">
            <div class="col col-sm">
                <div class="card mb-3" style="border-radius: 1rem; box-shadow: 0 0 10px 1px rgb(15, 6, 6)">
                  <div class="row g-0" >
                      <div class="card-body p-4 p-lg-4 text-black">

                          <form action="../processes/profile_update.php"
                      method="post"
                      enctype="multipart/form-data">
                          <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">PERSONAL INFORMATION</h5>



                          <?php
                                include('../general/dbcon.php'); 
                              $currentUser = $_SESSION['username'];
                              $sql = "SELECT * FROM members WHERE username ='$currentUser'";

                              $gotResuslts = mysqli_query($db,$sql);

                              if($gotResuslts){
                                  if(mysqli_num_rows($gotResuslts)>0){
                                      while($row = mysqli_fetch_array($gotResuslts)){
                                          //print_r($row['user_image']);
                                          ?>
                                  <div class="col-md">    
                                    <div class="col-12 my-4">
                                        <label for="username" class="form-label">Member ID</label>
                                        <div class="input-group has-validation">
                                          <input type="email" class="form-control" id="member-id" placeholder="123 456 789" name="member_id" value="<?php echo $row['member_id']; ?>" disabled>
                                        </div>
                                      </div>
                                    <div class="col-12 my-4">
                                        <label for="username" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                          <span class="input-group-text">@</span>
                                          <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $row['username']; ?>" disabled>
                                        <div class="invalid-feedback">
                                            Your username is required.
                                          </div>
                                        </div>
                                      </div>
                                  <div class="col-12 my-5">
                                    <label for="username" class="form-label">Name</label>
                                            <div class="input-group">
                                                <span class="input-group-text">First and last name</span>
                                                <input type="text" aria-label="First name" class="form-control" name="firstname" value="<?php echo $row['firstname']; ?>" required>
                                                <input type="text" aria-label="Last name" class="form-control" name="lastname" value="<?php echo $row['lastname']; ?>" required>
                                            </div>
                                    </div>
                                    <div class="col-12 my-4">
                                      <label for="email" class="form-label">Email</label>
                                      <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" value="<?php echo $row['email']; ?>" required>
                                      <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                      </div>
                                    </div>

                                    <div class="col-12 my-4">
                                        <label for="tel" class="form-label">Mobile</label>
                                        <input type="tel" class="form-control" id="tel" placeholder="04 1111 1111" name="mobile" value="<?php echo $row['mobile']; ?>" required>
                                      </div>

                                      <div class="col-12 my-4">
                                      <label for="gender" class="form-label">Gender</label>
                                      <select class="form-select" aria-label="Default select example" name="gender" required>
                                          <option selected disabled>  <?php echo ucfirst($row['gender']); ?> </option>
                                          <option value="male">Male</option>
                                          <option value="female">Female</option>
                                        </select>
                                      </div>
                                          <div class="pt-1 mb-4">
                                          <input type="submit" name="personal_information"  class="btn btn-dark btn-block" value="Save Change">
                                            <a class="btn btn-dark btn-block" href="member-account.php" type="button">Cancel</a>
                                            <?php
                                   if($_GET['succeeded']){
                                        if($_GET['succeeded'] == 'profile_updated'){
                                            ?>
                                            <small class="alert alert-success"> Updated Successfully</small>
                                            <?php
                                        }
                                    }
                                      ?> 
                                          </div>  

                                          <?php
                                      }
                                  }
                              }
                              ?>
                          </form>
                        </div>
                      </div>
                </div>       
              </div>
            </div>
            
            <div class="col col-sm">
              <div class="card w-100" style="border-radius: 1rem; box-shadow: 0 0 10px 1px rgb(15, 6, 6)">
                <div class="row g-0" >
                    <div class="card-body p-4 p-lg-4 text-black">
                        <form action="../processes/profile_update.php" method="post">
                            <h5 class="fw-normal mb-1 pb-3" style="letter-spacing: 1px;">ADDRESS</h5>

                            <?php
                              $currentUser = $_SESSION['username'];
                              $sql = "SELECT * FROM members WHERE username ='$currentUser'";
                              $gotResuslts = mysqli_query($db,$sql);
                              if($gotResuslts){
                                  if(mysqli_num_rows($gotResuslts)>0){
                                      while($row = mysqli_fetch_array($gotResuslts)){
                                          ?>
                            <div class="col-12 my-2">
                              <input type="text" class="form-control" id="address"  maxlength="100" placeholder="Street Name | Surburb | State | Postal Code" name="address"  value="<?php echo $row['address']; ?>" required>
                              <div class="invalid-feedback">
                              </div>
                            </div>

                              <h5 class="fw-normal mb-1 mt-4 pb-3" style="letter-spacing: 1px;">PERSONAL STATUS</h5>

                              
                              <div class="row my-2">
                                <div class="col">
                                    <label for="state" class="form-label">Age</label>
                                    <input type="number" onchange="setTwoNumberDecimal"  min="0" max="150" class="form-control" placeholder="" name="age" value="<?php echo $row['age']; ?>" required>
                                </div>
                                <div class="col">
                                    <label for="state" class="form-label">Weight</label>
                                        <input type="number" onchange="setTwoNumberDecimal"  min="0" max="250" class="form-control" placeholder="KG" name="m_weight" value="<?php echo $row['m_weight']; ?>" required>
                                </div>
                                <div class="col">
                                    <label for="zip" class="form-label">Height</label>
                                    <input type="number" class="form-control"  onchange="setTwoNumberDecimal"  min="0" max="250" placeholder="CM" name="height" value="<?php echo $row['height']; ?>" required>
                                  </div>
                              </div>

                          <div class="pt-1 mt-1">
                          <input type="submit" name="address_profile"  class="btn btn-dark btn-block" value="Save Change">
                              <a class="btn btn-dark btn-block" href="member-account.php" type="button">Cancel</a>
                              <?php
                              if($_GET['succeed']){
                                  if($_GET['succeed'] == 'address_profile_updated'){
                                      ?>
                                      <small class="alert alert-success"> Updated Successfully</small>
                                      <?php
                                  }
                              }
                              ?> 
                          </div>                       
                                

                                          <?php
                                      }
                                  }
                              }
                              ?>
                
                        </form>

                      </div>
                    </div>
              </div>
              <div class="card mt-3" style="border-radius: 1rem; box-shadow: 0 0 10px 1px rgb(15, 6, 6)">
                <div class="row g-0" >
                    <div class="card-body p-4 p-lg-4 text-black">

                    <form action="../processes/profile_update.php"
                      method="POST"
                      enctype="multipart/form-data">
                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">PROFILE PICTURE</h5>

                    <?php
                        $currentUser = $_SESSION['username'];
                        $sql = "SELECT * FROM members WHERE username ='$currentUser'";

                        $gotResuslts = mysqli_query($db,$sql);

                        if($gotResuslts){
                            if(mysqli_num_rows($gotResuslts)>0){
                                while($row = mysqli_fetch_array($gotResuslts)){
                                    //print_r($row['user_name']);
                                    ?>
                                        <div class="col-12 my-3">
                                        <div class="input-group has-validation">
                                        <input type="file" name="userImage" class="form-control">
                                        </div>
                                      </div>
                          <div class="pt-1 mt-3">
                          <input type="submit" name="update_photo"  class="btn btn-dark btn-block" value="Save Change">
                              <a class="btn btn-dark btn-block" href="member-account.php" type="button">Cancel</a>
                              <?php
                if($_GET['success']){
                    if($_GET['success'] == 'userUpdated'){
                        ?>
                        <small class="alert alert-success"> Picture Uploaded Successfully</small>
                        <?php
                    }
                }


                if(isset($_GET['error'])){

                    if($_GET['error'] == 'emptyNameAndEmail'){
                        ?>
                        <small class="alert alert-danger"> Name and email is required</small>
                        <?php
                    }else if($_GET['error'] == 'invalidFileType'){
                        ?>
                        <small class="alert alert-danger"> Invalid file type, Only Images allowed.</small>
                        <?php
                    }else if($_GET['error'] == 'invalidFileSize'){
                        ?>
                        <small class="alert alert-danger"> Maximum 5mb Image size allowed.</small>
                        <?php
                    }
                }
                ?> 
                          </div>                       
                                    <?php
                                }
                            }
                        }


                    ?>
                
                </form>    
                
             


                     
                      </div>
                    </div>
              </div>
              <div class="card mt-3" style="border-radius: 1rem; box-shadow: 0 0 10px 1px rgb(15, 6, 6)">
                <div class="row g-0" >
                    <div class="card-body p-4 p-lg-4 text-black">
                        <form action="#" method="post">
                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">PASSWORD</h5>
                              <div class="row my-2">
                                <div class="col">
                                    <label for="state" class="form-label">Old Password</label>
                                    
                                    <input type="text" class="form-control" id="password" placeholder=""  required>
                                </div>
                                <div class="col">
                                    <label for="state" class="form-label">New Password</label>
                                        <input type="text" class="form-control" id="password" placeholder="" required>
                                </div>
                                <div class="col">
                                    <label for="zip" class="form-label">Confirm Password</label>
                                    <input type="text" class="form-control" id="password" placeholder="" required>
                                  </div>
                              </div>

                          <div class="pt-1 mt-3">
                              <button class="btn btn-dark btn-block" type="button">Save Change</button>
                              <button class="btn btn-dark btn-block" type="button">Cancel</button>
                          </div>                       
                        </form>
                      </div>
                    </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
  <script src="../js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>


<?php

