<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
      <div id="myCarousel" class="carousel slide about-carousel contact-img-carousel" role="" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="carousel-caption carousel-text text-start">
                <p>INTERESTED IN CRUNCH?
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption carousel-text text-start">
                <p>CONTACT US</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption carousel-text text-end">
                <p>Send us a message</p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="container marketing contact-background">
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-7">


            <form method="post" action="contact.php">
              <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text">First and last name</span>
                    <input type="text" aria-label="First name" class="form-control" name="firstname" required>
                    <input type="text" aria-label="Last name" class="form-control" name="lastname" required>
                  </div>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="email" required>
              </div>
              <div class="mb-3">
                <input type="tel" class="form-control" id="exampleFormControlInput2" placeholder="Mobile Number" name="mobile" required>
              </div>
              <div class="mb-3">
                <select class="form-select" name="subject_contact" aria-label="Default select example" required>
                    <option selected>Open this select menu</option>
                    <option value="Becoming a member">Becoming a member</option>
                    <option value="Becoming a member">Becoming a Trainer</option>
                    <option value="My Membership">My Membership</option>
                  </select>
              </div>
              <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="message_contact" placeholder="Message" required></textarea>
                <button type="submit" class="btn btn-dark" style="margin-top:10px" name="contact_member">Send Message</button>
              </div>
            </form>

                  <!-- insert to contact database -->
                <?php 
                  $server = "localhost";
                  $username = "root";
                  $password = ""; 
                  $dbname = "crunchfitness";

                  $conn = mysqli_connect($server, $username, $password, $dbname);

                  if(isset($_POST['contact_member'])) {


                    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['subject_contact']) && !empty($_POST['message_contact'])) {

                      $firstname = $_POST['firstname'];
                      $lastname = $_POST['lastname'];
                      $email = $_POST['email'];
                      $mobile = $_POST['mobile'];
                      $subject_contact = $_POST['subject_contact'];
                      $message_contact = $_POST['message_contact'];

                      $query = "insert into contact(firstname,lastname,email,mobile,subject_contact,message_contact) values('$firstname' , '$lastname' , '$email' , '$mobile' , '$subject_contact' , '$message_contact')";

                      $run = mysqli_query($conn, $query) or die(mysqli_error());

                      if($run) {
                        echo '<p class="alert alert-success">Message successfully Sent</p>';
                      } 
                    }
                  }

                ?>
             





          </div>
          <div class="col-md-5">
            <img class="img-fluid" src="../images/contact-page-hero.jpeg" style="box-shadow: 0 0 5px 1px rgb(15, 6, 6)" alt="hero">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-7 order-md-2">
            <h1 class="featurette-heading fw-normal lh-1">Contact Crunch Fitness Office</span>
            </h1>
            <p class="lead">Haven't found what you're looking for?
            </p>
            <h3 class="featurette-heading fw-normal lh-1">Head Office Hours</span>
            </h3>
            <p class="lead">Mon - Fri | 9am - 5pm</p>
            <p class="lead">Sat - Sun | Closed</p>
            <h3 class="featurette-heading fw-normal lh-1">Head Office Enquiries Note</span></h3>
            <p class="lead">If you have a question or request regarding your current Crunch membership (e.g. payments, freezes or cancellations) please make sure you contact your Crunch Home Club first using the form above. Thanks!</p>
            <h3 class="featurette-heading fw-normal lh-1">Want to join the team?
            </span></h3>
            <p class="lead">With huge, first class facilities, and being world famous for fusing entertainment with fitness, Crunch is here to make a bench impression in Australia and we are looking for the next person to grow with us. Please visit our Careers page to learn more.</p>  
        </div>
          <div class="col-md-5 order-md-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1554.2588085378488!2d145.09095798197293!3d-37.87768011192599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66b986d29fb37%3A0xf39f152d388e7e22!2sCrunch%20Fitness%20Chadstone!5e0!3m2!1sen!2sau!4v1673583181856!5m2!1sen!2sau" style="max-width: 100%; width:500px; height:500px; border-radius:5px; box-shadow: 0 0 5px 1px rgb(14, 13, 13);"> referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <hr class="featurette-divider">
          </div>
        </div>
        <!-- /END THE FEATURETTES -->
      </div>
      <!-- /.bottom banner -->
      <?php include('../components/member-bottom-banner.php'); ?>
    </main>

    <footer class="bg-dark text-white">
      <!-- Grid container -->
    <?php include('../components/member-footer.php'); ?>
    </footer>
    <!-- Footer -->
  </body>
  <script src="../js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>


