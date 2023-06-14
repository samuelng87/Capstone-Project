<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
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
      <div id="myCarousel" class="carousel slide about-carousel blog-img-carousel" role="" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="carousel-caption carousel-text text-center">
                 <p>BLOG</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption carousel-text text-start">
                <p>Mindset & Motivation</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption carousel-text text-end">
                <p>Going Next Level</p>
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
      <div class="container marketing">
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">BLOG- Mindset & Motivation </span>
            </h2>
            <p class="lead"> You'll find great trips, hacks and techniques for when you're stuck for motivation or need to develop that winning mindset. Weight Loss Vs Fat Loss Explained 9 Ways To Get (and Stay) Motivated To Lose Weight How To Stay Active When Injured! Can Exercise Reduce Stress? How To Make Working Out A Habit! How Exercise Impacts Your Mental Health </p>
          </div>
          <div class="col-md-5">
            <img class="img-fluid" src="../images/blog-mindset-and-motivation.jpeg" alt="">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Going Next Level </span>
            </h2>
            <p class="lead"> You'll find great tips, hacks and techniques to overcome barriers to your fitness and weight loss journey. Why Am I Not Losing Weight? Best Christmas Gifts: Part 2 Why You Need A Regular Exercise Schedule! Get Manscaped! Have You Heard Of Thrusta Gym Equipment? Safeguard Your Shoulders </p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="img-fluid" src="../images/blog-going-next-level.jpeg" alt="about3">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1"> Success Journeys & Transformations </span>
            </h2>
            <p class="lead"> Read these incredible success stories from Crunch members and trainers on how they overcame challenges on their fitness journeys to emerge leaner, stronger and fitter. We can't wait to see one from you soon! This Is Our Story: Vitiligo Sisters Our Members! Movember: Raising Awareness What Your Workout Music Says About You! What Your Gym Gear Says About You Bulgarian Split Squat: The Exercise That Is Taking Over Tiktok </p>
          </div>
          <div class="col-md-5">
            <img class="img-fluid" src="../images/blog-success-journeys-and-transformations.jpeg" alt="about2">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurett about-featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Nutrition & Fuel</h2>
            <p class="lead"> Healthy pre-and post-workout snacks, tips to beat those unhealthy cravings and ways to help you make 'healthy' a natural part of your diet. How To Start Your Weight Loss Journey Toxic Fat: What Is It? Best Christmas Gifts: Part 1 Gaining Weight While Working Out? Here’s 5 Reasons Why! Powerhouse Supplements – Best Products! Protein Powder? Try Happy Way! </p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="img-fluid" src="../images/blog-fuel-and-nutrition.jpeg" alt="about3">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1"> Workouts & Exercise</h2>
            <p class="lead"> From a heart-thumping workout to an intense session of resistance training - whatever your style, you'll find info about different workout styles and their benefits. 5 Best Cardio Machines According To Crunch Pt’s! Halloween Wicked Workout! Best Skierg Workouts 360t – Everything You Need To Know! How To Find A Good Personal Trainer Should You Try The ‘600 Calories In 60 Minutes’ Challenge? </p>
          </div>
          <div class="col-md-5">
            <img class="img-fluid" src="../images/blog-workouts-and-exercise.jpeg" alt="about2">
            <hr class="featurette-divider">
          </div>
        </div>
        <!-- /END THE FEATURETTES -->
      </div>
      <!-- /.bottom banner -->
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