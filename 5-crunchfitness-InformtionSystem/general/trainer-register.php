<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Register</title>
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
    <?php include('../components/general-navbar.php'); ?>
    </header>
    <!-- /navbar -->
    <main>
      <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem; box-shadow: 0 0 15px 5px rgb(15, 6, 6)">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="../images/trainer.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">




                      <form action="trainer-register.php" method="post">
                      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Trainer Register

                        </h5>
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
                            <button class="btn btn-dark btn-block" name="trainer_register" type="submit">Register</button>
                        </div>
                        <?php include('errors.php'); ?>
                        <p class="mb-5 pb-lg-2" style="color: #030303;"><a href="trainer-login.php" style="color: #0f0f11;">Sign In</a>

                     
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="bg-dark text-white">
    <?php include('../components/member-footer.php'); ?>
    </footer>
    <!-- Footer -->
  </body>
  <script src="../js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>