<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training</title>
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
      <div id="myCarousel" class="carousel slide about-carousel training-img-carousel" role="" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="carousel-caption carousel-text text-start">
                <p>-TRAINING- LET'S CRUNCH- </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption carousel-text text-start">
                <p>Gym-azing looks like this</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption carousel-text text-end">
                <p>Not all gyms are created equally</p>
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
      <div class="container marketing contact-background training-style">
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-5">
            <h2 class="featurette-heading fw-normal lh-1">
              <span class="text-muted"> Tons of weights </span>
            </h2>
            <p class="lead"> Bulk up, trim down, or just rock out to your favorite playlist. Loads of free weights, resistance equipment, Olympic lifting platforms with bumper plates and Crunch Power 1/2 Hour Circuit will serve you well </p>
          </div>
          <div class="col-md-7">
            <img class="img-fluid" src="../images/training_weights1.jpeg" alt="">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-5">
            <h2 class="featurette-heading fw-normal lh-1">
              <span class="text-muted"> Rows of cardio </span>
            </h2>
            <p class="lead"> Spoilt for choice with all the latest in cardio equipment to crush your fitness goals. Treadmills, cycles, rowers, ellipticals, stair masters, assault bikes, ski ergs and more. You've got a zillion ways to cardio burn! </p>
          </div>
          <div class="col-md-7">
            <img class="img-fluid" src="../images/training_cardio2.jpeg" alt="training">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-5">
            <h2 class="featurette-heading fw-normal lh-1">
              <span class="text-muted">World-famous Classes</span>
            </h2>
            <p class="lead"> Dedicated group fitness studios are four walls of innovative, ass-kicking, fun. HIIT, Zumba®, STRONG by Zumba®, Pound, Yoga, Pilates, Cycle, Boxing, Barre, Body Shred™, Dance and more. Get your Crunch Fix anywhere and anytime with Crunch Live online video workouts. Ready to get class-y? </p>
          </div>
          <div class="col-md-7">
            <img class="img-fluid" src="../images/training_classes3.jpeg" alt="training">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-5">
            <h2 class="featurette-heading fw-normal lh-1">
              <span class="text-muted"> Functional Training Areas </span>
            </h2>
            <p class="lead"> Green means GO. Massive turf functional training zones are perfect for individual workouts, one-on-one sessions with a personal trainer and small group training. Combined with HIIT4 and UTC stations, battle ropes, sleds, medicine balls, tyres, kettlebells and TRXs it's your new favourite wonderland. </p>
          </div>
          <div class="col-md-7">
            <img class="img-fluid" src="../images/training_functional_training.jpeg" alt="training">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-5">
            <h2 class="featurette-heading fw-normal lh-1">
              <span class="text-muted"> Rest and Recovery </span>
            </h2>
            <p class="lead"> Rest to grow! Rest, relax and recover with the latest Hydromassage chairs and Thera-gun Percussive Massage devices. And for the final touches, an automated spray tan booth new from Italy, adds that muscle-toning glow. </p>
          </div>
          <div class="col-md-7">
            <img class="img-fluid" src="../images/training_rest_and_recovery.jpeg" alt="training">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-5">
            <h2 class="featurette-heading fw-normal lh-1">
              <span class="text-muted"> World Class Trainers </span>
            </h2>
            <p class="lead"> Need to accelerate your results? Call in a pro. Certified Personal Trainers create programs to help you reach your goals, designed 100% around you. And they'll bring out the badass in you, cheering you on when you cross that finish line! </p>
          </div>
          <div class="col-md-7">
            <img class="img-fluid" src="../images/blog-going-next-level.jpeg" alt="training">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-5">
            <h2 class="featurette-heading fw-normal lh-1">
              <span class="text-muted"> Functional Training Areas </span>
            </h2>
            <p class="lead"> Green means GO. Massive turf functional training zones are perfect for individual workouts, one-on-one sessions with a personal trainer and small group training. Combined with HIIT4 and UTC stations, battle ropes, sleds, medicine balls, tyres, kettlebells and TRXs it's your new favourite wonderland. </p>
          </div>
          <div class="col-md-7">
            <img class="img-fluid" src="../images/training_functional_training.jpeg" alt="">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-5">
            <h2 class="featurette-heading fw-normal lh-1">
              <span class="text-muted"> Evolt 360 Body Scanning </span>
            </h2>
            <p class="lead"> Scientifically motivated? Get over 40 individual measurements in just 60 seconds. Get your calories and macro-nutrient requirements and track your progress. Reaching goals has never been easier. </p>
          </div>
          <div class="col-md-7">
            <img class="img-fluid" src="../images/training_evolt.jpeg" alt="">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-5">
            <h2 class="featurette-heading fw-normal lh-1">
              <span class="text-muted"> People who care </span>
            </h2>
            <p class="lead"> We're more than just incredible facilities. We're instructors, trainers, and staff that live for your post-workout high-fives. </p>
          </div>
          <div class="col-md-7">
            <img class="img-fluid" src="../images/about_us_2.jpeg" alt="">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="price-box">
          <div class="container text-center">
          <?php include('../components/member-price-packages.php');?>
          </div>
        </div>
      </div>
      </div>
      </div>
      <!-- /END THE FEATURETTES -->
      </div>
      <!-- /.container -->
    <?php include('../components/member-bottom-banner.php'); ?>
    </main>
    <footer class="bg-dark text-white">
    <?php include('../components/member-footer.php'); ?>
    </footer>
    <!-- Footer -->
  </body>
  <script src="../js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>