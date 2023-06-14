<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
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
      <div id="myCarousel" class="carousel slide about-carousel class-img-carousel" role="" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="carousel-caption carousel-text text-start">
                <p>TYPES OF CLASS</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption carousel-text text-start">
                <p>GROUP FITNESS</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption carousel-text text-end">
                <p>We take pride in creating inspiring workouts that push you to greatness</p>
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
      
      <div class="container marketing contact-background class-style">
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
            <div class="row featurette about-featurette">
                <div class="col-md-7">
                    <button type="button" class="faq-collapsible collapsible dropdown-toggle text-center" style="border-radius:5px 5px 0px 0px;">
                        DANCE
                    </button>
                    <div class="faq-content content">
                      <p>
                        Join the party as you dance your way to a fitter, happier, and healthier version of you. Our dance classes range from fitness based to technical, they are set to top 40 and popular music, and suited for everyone.
                    </p>
                    </div>
        
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        What can I expect in a DANCE class?
                    </button>
                    <div class="faq-content content">
                      <p>
                        Our dance classes are choreography-focussed classes where you learn routines or combinations in a wide range of dance styles. Some are taught track by track and others you learn a full routine in one class. Feels like a workout, no? Is it a workout? yes!                  
                    </p>
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        Are DANCE classes suited to you?
                    </button>
                    <div class="faq-content content">
                      <p>
                        Do you like music? Does It make you feel like moving? Can't keep still when your favourite song comes on? You'll love these classes!
                        We offer a wide range of classes, full of music and variety, for all fitness levels.      
                    </p>          
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        What are the health benefits of our DANCE classes?
                    </button>
                    <div class="faq-content content">
                      <p>
                        You burn calories while having fun <br>
                        Increases cardiovascular fitness <br> 
                        Accelerates fat loss<br> 
                        Great for improving coordination<br> 
                        Agility development<br>
                    </p>         
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        What do I need to bring to a DANCE class?
                    </button>
                    <div class="faq-content content">
                      <p>
                        Always bring a towel and water bottle to our Crunch classes    
                    </p>          
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle" style="border-radius:0px 0px 5px 5px;">
                        Our Dance classes include:
                    </button>
                    <div class="faq-content content">
                      <p>
                        #Justdance<br>
                        Belly Dance <br> 
                        Bollywood<br> 
                        Hip Hop <br>
                        Latin Rhythms <br>
                        Urban Dance <br>
                        Zumba® <br>
                    </p>         
                    </div>
      
                </div>
                <div class="col-md-5">
                  <img class="img-fluid" src="../images/blog-banner_classes_category_dance.jpeg" style="box-shadow: 0 0 5px 1px rgb(15, 6, 6)" alt="hero">
                </div>
              </div>
              <hr class="featurette-divider">
              <div class="row featurette about-featurette">
                <div class="col-md-7 order-md-2">
                    <button type="button" class="faq-collapsible collapsible dropdown-toggle text-center" style="border-radius:5px 5px 0px 0px;">
                        FITNESS
                    </button>
                    <div class="faq-content content">
                      <p>
                        Our calorie burning, heart pumping fitness classes are set to inspiring beats, and will supercharge your workout to leave you feeling uplifted! These classes are suitable for all, ranging from using a step to being influenced by martial arts, you are guaranteed to get results fast.
                    </p>
                    </div>
        
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        What can I expect in a FITNESS class?
                    </button>
                    <div class="faq-content content">
                      <p>
                        Calorie burning, heart-pumping, extremely fun workouts to the beat of the music. We've created a variety of structured classes full of intensity, energy, and entertainment so that you won't notice you're doing a workout!
    
                    </p>
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        Are FITNESS classes suited to me?
                    </button>
                    <div class="faq-content content">
                      <p>
                        100%! The classes provided to you are filled with a variety of movements to suit all type of fitness levels, you'll always want to come back for more.
         
                    </p>          
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        What are the health benefits of our FITNESS classes?
                    </button>
                    <div class="faq-content content text-start">
                      <p>
                        Burning loads of calories <br>
                        Improvement in V02 max <br>
                        Helps with fat loss <br>
                        Noticeable progression in your workouts <br>
                        Boosts stamina and energy levels <br>
                        Improves your base level of fitness <br>
                        
                    </p>         
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        What do I need to bring to a FITNESS class?
                    </button>
                    <div class="faq-content content ">
                      <p>
                        BYO mat to all our Crunch classes and always bring a towel and water bottle.
                    </p>          
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle" style="border-radius:0px 0px 5px 5px;">
                        Our Fitness classes include:
                    </button>
                    <div class="faq-content content text-start">
                      <p>
                        Cycle <br>
                        Functional Step <br>
                        Pound® <br>
                        Step <br>
                        Strong Nation® <br>
                        Warrior <br>
                        Zumba® Step <br>
                    </p>         
                    </div>
              </div>
                <div class="col-md-5 order-md-1">
                    <img class="img-fluid" src="../images/banner_classes_category_fitness.jpeg" style="box-shadow: 0 0 5px 1px rgb(15, 6, 6)" alt="hero">
                </div>
              </div>
              <hr class="featurette-divider">
                                  <!-- Flow / HIIT -->

              <div class="row featurette about-featurette">
                <div class="col-md-7">
                    <button type="button" class="faq-collapsible collapsible dropdown-toggle text-center" style="border-radius:5px 5px 0px 0px;">
                        FLOW
                    </button>
                    <div class="faq-content content">
                      <p>
                        Realign and strengthen your body from the inside out. Flow through the world of Yoga, Pilates and Barre to improve your physical, mental, and emotional awareness and create strong foundations for life.

                    </p>
                    </div>
        
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        What can I expect in a FLOW class?
                    </button>
                    <div class="faq-content content">
                      <p>
                        With our variety of FLOW classes, you can expect education in body awareness and alignment while focussing on technique and breath. Our classes range from traditional to a fusion, so that you can get the most out of your favourite discipline. You'll be strengthening your body in variety of ways leaving you to feel balanced and centred.

                    </p>
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        Is FLOW for suited to me?
                    </button>
                    <div class="faq-content content">
                      <p>
                        This class type is certainly for everyone. Please make sure you speak with your instructor prior to start time if you have any injuries or conditions so they can cater for all fitness levels and provide everyone with the most effective workout.

   
                    </p>          
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        What are the health benefits of a FLOW class?
                    </button>
                    <div class="faq-content content">
                      <p>
                        Enhances muscle definition <br>
                        Develops balance and alignment <br>
                        Great for core strength <br>
                        Improves mobility and range of motion <br>
                        Energises your body <br>
                        Breath awareness <br>
                        Decreases stress levels <br>
                    </p>         
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        What do I need to bring to a FLOW class?
                    </button>
                    <div class="faq-content content">
                      <p>
                        BYO mat to all our Crunch classes and always bring a towel and water bottle.

                    </p>          
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle" style="border-radius:0px 0px 5px 5px;">
                        Our Flow classes include:
                    </button>
                    <div class="faq-content content">
                      <p>
                        ▪ Barre Fusion <br>
                        ▪ Barre HIIT <br>
                        ▪ Fat Burning Pilates <br>
                        ▪ Hatha Yoga <br>
                        ▪ Pilates Mat <br>
                        ▪ POP Pilates <br>
                        ▪ Power Pilates <br>
                        ▪ Power Yoga <br>
                        ▪ Vinyasa Yoga <br>
                        ▪ Yin and Yang Yoga <br>
                        ▪ Yin Yoga <br>
                    </p>         
                    </div>
      
                </div>
                <div class="col-md-5">
                  <img class="img-fluid" src="../images/banner_classes_category_flow.jpeg" style="box-shadow: 0 0 5px 1px rgb(15, 6, 6)" alt="hero">
                </div>
              </div>
              <hr class="featurette-divider">
              <div class="row featurette about-featurette">
                <div class="col-md-7 order-md-2">
                    <button type="button" class="faq-collapsible collapsible dropdown-toggle text-center" style="border-radius:5px 5px 0px 0px;">
                        HIIT
                    </button>
                    <div class="faq-content content">
                      <p>
                        Get shredded with the perfect combination of high intensity cardio and strength training. Each workout is different and varied, to make sure you're always pushing your max, burning calories, getting stronger and more fit!

                    </p>
                    </div>
        
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        What is HIIT?
                    </button>
                    <div class="faq-content content">
                      <p>
                        HIIT stands for 'High-intensity interval training'. It is a cardiovascular exercise strategy alternating between short periods of intense exercises, along with less intense recovery periods.

    
                    </p>
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        What can I expect in a HIIT class?
                    </button>
                    <div class="faq-content content">
                      <p>
                        As these types of classes involve high-intensity movements, expect that heart rate to rise, fall, and then to rise again! This can leave you with a big calorie loss if paired well with healthy eating.

                        Expect to push yourself as you exercise in circuits, groups and individually. Your exercises will vary on the strengths of your instructor and what they feel is appropriate for the people they have in front of them.         
                    </p>          
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        Is HIIT suited to me?
                    </button>
                    <div class="faq-content content text-start">
                      <p>
                        HIIT is for everyone! No matter what your fitness level, you can achieve massive results & start to see improvements in your fitness. Plus, our instructors are always there to provide options if you need.

                        What are the health benefits of HIIT?
                        
                        Burns a Lot of Calories in a Short Amount of Time
                        Improves your V02 Max
                        Helps with fat loss
                        Keeps you burning calories AFTER your class
                        It's more time-efficient (especially with our 30-minute class options!)
                        Improves strength and muscular endurance
                        
                    </p>         
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle">
                        What do I need to bring to a HIIT class?
                    </button>
                    <div class="faq-content content ">
                      <p>
                        BYO mat to all our Crunch classes and always bring a towel and water bottle. Other equipment will be used but is supplied by Crunch Fitness.

                    </p>          
                    </div>
                    <button type="button" class="class-collapsible collapsible dropdown-toggle" style="border-radius:0px 0px 5px 5px;">
                        Our Fitness classes include:
                    </button>
                    <div class="faq-content content text-start">
                      <p>
                        ▪ 30 in 30
                        ▪ Adrenaline
                        ▪ Badass Bootcamp
                        ▪ Bodyshred
                        ▪ Boxing
                        ▪ Total HIIT
                        ▪ Tread and Burn
                        ▪ Ultimate Conditioning
                    </p>         
                    </div>
              </div>
                <div class="col-md-5 order-md-1">
                    <img class="img-fluid" src="../images/banner_classes_category_hiit.jpeg" style="box-shadow: 0 0 5px 1px rgb(15, 6, 6)" alt="hero">
                </div>
              </div>
                      <!-- STRENGTH / RECOVERY -->



        
        <hr class="featurette-divider">
        <div class="row featurette about-featurette">
            <div class="col-md-7">
                <button type="button" class="faq-collapsible collapsible dropdown-toggle text-center" style="border-radius:5px 5px 0px 0px;">
                    RECOVERY
                </button>
                <div class="faq-content content">
                  <p>
                    Recover and rejuvenate through a class of mobility, core work, meditation or sound healing. These mindful recovery sessions allow you to become more aware, and relaxed as you move through low-intensity exercises or allow for your body to relax and mind to re-centre.

                </p>
                </div>
    
                <button type="button" class="class-collapsible collapsible dropdown-toggle">
                    What can I expect in a RECOVERY class?
                </button>
                <div class="faq-content content">
                  <p>
                    With our variety of RECOVERY classes, you can expect to learn about the different ways your body can recover from exercise or injury, how you can position your body for optimum wellness and how you can use the power of the mind to refocus, relax and unwind.



                </p>
                </div>
                <button type="button" class="class-collapsible collapsible dropdown-toggle">
                    Is RECOVERY for suited to me?
                </button>
                <div class="faq-content content">
                  <p>
                    This class type is certainly for everyone. Some classes have movement some just require focus.

 
                </p>          
                </div>
                <button type="button" class="class-collapsible collapsible dropdown-toggle">
                    What are the health benefits of a RECOVERY class?
                </button>
                <div class="faq-content content">
                  <p>
                    Enhances body awareness
                    Develops an increased focus
                    Centres the mind
                    Connects, mind, body, breath and spirit
                    Breath awareness
                    Decreases stress levels
                    Optimizes performance
                </p>         
                </div>
                <button type="button" class="class-collapsible collapsible dropdown-toggle">
                    What do I need to bring to a RECOVERY class?
                </button>
                <div class="faq-content content">
                  <p>
                    BYO mat to all our Crunch classes and always bring a towel and water bottle.

                </p>          
                </div>
                <button type="button" class="class-collapsible collapsible dropdown-toggle" style="border-radius:0px 0px 5px 5px;">
                    Our Recovery classes include:
               </button>
                <div class="faq-content content">
                  <p>
                    ▪ Core Conditioning
                    ▪ Guided Meditation
                    ▪ Hardcore Abs
                    ▪ Mobility Fix
                    ▪ Sound Healing
                    ▪ Stretch and Strength 
                </p>         
                </div>
  
            </div>
            <div class="col-md-5">
              <img class="img-fluid" src="../images/banner_classes_category_recovery.jpeg" style="box-shadow: 0 0 5px 1px rgb(15, 6, 6)" alt="hero">
            </div>
          </div>
          <hr class="featurette-divider">
          <div class="row featurette about-featurette">
            <div class="col-md-7 order-md-2">
                <button type="button" class="faq-collapsible collapsible dropdown-toggle text-center" style="border-radius:5px 5px 0px 0px;">
                    STRENGTH
                </button>
                <div class="faq-content content">
                  <p>
                    Chisel a cut physique with programming designed to define and strengthen your muscles. Using a variety of resistance tools and bodyweight, these total body workouts will help strengthen and build muscle for everyone.

                </p>
                </div>
    
                <button type="button" class="class-collapsible collapsible dropdown-toggle">
                    What can I expect in a STRENGTH class?
                </button>
                <div class="faq-content content">
                  <p>
                    This type of workout guarantee's you, body-sculpting results where you are continuously strengthening and toning your muscles. This can be achieved with a variety of different things such as using your own body weight, dumbbells and/or kettlebells, resistance bands and more.


                </p>
                </div>
                <button type="button" class="class-collapsible collapsible dropdown-toggle">
                    Are STRENGTH classes suited to me?
                </button>
                <div class="faq-content content">
                  <p>
                    Absolutely! It's great for all fitness levels as it involves many low impact exercises. But don't be fooled, you're highly likely to feel the burn and have an increased heart rate in these types of classes as well.

     
                </p>          
                </div>
                <button type="button" class="class-collapsible collapsible dropdown-toggle">
                    What are the health benefits of our STRENGTH classes?
                </button>
                <div class="faq-content content text-start">
                  <p>
                    Builds overall body strength
                    Improvement in muscular endurance
                    Fosters better technique and alignment
                    Increases stability and balance
                    Optimal for burning fat
                    Tones and shapes your body
                    
                </p>         
                </div>
                <button type="button" class="class-collapsible collapsible dropdown-toggle">
                    What do I need to bring to a STRENGTH class?
                </button>
                <div class="faq-content content ">
                  <p>
                    BYO mat to all our Crunch classes and always bring a towel and water bottle. Weights provided by Crunch Fitness.

                </p>          
                </div>
                <button type="button" class="class-collapsible collapsible dropdown-toggle" style="border-radius:0px 0px 5px 5px;">
                    Our Strength classes include:
                </button>
                <div class="faq-content content text-start">
                  <p>
                    ▪ ABC: Abs, Back and Chest
                    ▪ ABT: Abs, Butt And Thighs
                    ▪ Booty Balance
                    ▪ Burn and Firm
                    ▪ Chisel
                    ▪ Strength and Conditioning
                    ▪ Total Body Sculpt
                </p>         
                </div>
          </div>
            <div class="col-md-5 order-md-1">
                <img class="img-fluid" src="../images/banner_gx_instructor_spotlight.jpeg" style="box-shadow: 0 0 5px 1px rgb(15, 6, 6)" alt="hero">
            </div>
          </div>
          <hr class="featurette-divider">
          <?php include('../components/member-price-packages.php');?>
      </div>
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