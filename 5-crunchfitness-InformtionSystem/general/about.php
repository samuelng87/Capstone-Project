<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <div id="myCarousel" class="carousel slide about-carousel about-img-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="carousel-caption text text-center">
                <h1>Meet our team!</h1>
                <h3>We're a diverse bunch, each with our own personal story that drives our mission to make fitness doable and fun for everyone.</h3>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text text-start">
                <h1>Selena Chief Executive Officer (since 2007)</h1>
                <h1>Lusiano Chief Operating Officer (since 2007)</h1>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text-center">
                <h1>Andy Chief Marketing Officer (Since 2015)</h1>
                <h1>Pashtoonyar Chief Finance Officer (since 2009)</h1>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text-end">
                <h2>Ian Regional Manager (since 2010)</h2>
                <h2>Kirilee Business Information Manager (since 2010)</h2>
                <h2>Alissa Group Programs Manager (since 2007)</h2>
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
      <!-- Marketing messaging and featurettes
          ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row align-items-center justify-content-between text-center about-heading">
          <div class="col-lg">
            <img src="../images/icon_about_us_believe.png" alt="we believe">
            <h2 class="fw-normal">WE BELIEVE</h2>
            <p>You are created for GREATNESS. Therefore…</p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg">
            <img src="../images/icon_about_us_think.png" alt="we think">
            <h2 class="fw-normal">We THINK</h2>
            <p>It's our job to help you perspire to GREATNESS. Hence…</p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg">
            <img src="../images/icon_about_us_seek.png" alt="we seek">
            <h2 class="fw-normal">We SEEK</h2>
            <p>To Encourage, Empower and Entertain you for your own unique journey</p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg">
            <img src="../images/icon_about_us_say.png" alt="we say">
            <h2 class="fw-normal">We SAY</h2>
            <p>Come as you are! Anyone. Anyway. Anyhow.</p>
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Meet Crunch! <span class="text-muted">It’ll blow your mind.</span>
            </h2>
            <p class="lead">We have a No Judgments philosophy here. It's our Monday-thru-every-day mantra. A simple philosophy that drives us to create a community and a gym for all. No judgments means room for everyone, regardless of shape, size, age, race, gender or fitness level. No matter your workout of choice, we want you to feel good while reaching your goals.</p>
          </div>
          <div class="col-md-5">
            <img class="img-fluid" src="../images/about_us_1.jpeg" alt="">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span>
            </h2>
            <p class="lead">Our gyms have an easy vibe to them, they're massive, designed to offer you more variety and space to keep you motivated. We set low membership prices with no lock-in contracts to suit all budgets so there's no barriers to making fitness a lifestyle.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="img-fluid" src="../images/about_us_3.jpeg" alt="about3">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1"> Our Teams. <span class="text-muted">Checkmate.</span>
            </h2>
            <p class="lead">prep'd to cheer you on and help inspire you every day - it's up to you how to 'perspire' for your goals; but you'll always be praised for every step you make!</p>
          </div>
          <div class="col-md-5">
            <img class="img-fluid" src="../images/about_us_2.jpeg" alt="about2">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurett about-featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">And lastly. <span class="text-muted">Meet our local owners! </span>
            </h2>
            <p class="lead">So these two have combined, over 45 years’ experience managing in the fitness industry (yeah, they don’t look that old do they!?). It’s hard to find a couple as passionate and positive for people as these two, they call it ‘living with mana’, and it shows in everything they do. From the way they lead their Crunch family, with heart and intention, to the way they fearlessly grow the business, we are proud to call them our leaders. In 2007 they opened their first club in the heart of Sydney, partnering with some other young/not so young well respected fitness pioneers globally. It’s been a humble climb, however their unrivalled belief in ‘where there’s a will there’s a way’ has resulted in a steady opening of new clubs across the states of NSW and VICTORIA over the years. And the dream to grow across Australia is still in tack, we seem to always have far more vision than we do resources so we’re always grateful for the fun ride these two take us on. You’ll hear them say this everyday “everyone is created for greatness” and they show us just how true this is each time we witness a person share how Crunch changed their life .</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="img-fluid" style="object-fit: contain; max-width: 100%; width:500px; height:500px; border-radius:5px;" src="../images/about-selina-luch.jpeg" alt="about3">
          </div>
        </div>
        <hr class="featurette-divider">
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