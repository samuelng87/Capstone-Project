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
    <title>Shopping</title>
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
<main class="margin-t-shopping">

<div class="container member-shopping">
  
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
      <?php

$sql = "SELECT pro_Name, pro_desc, pro_price  FROM `product` WHERE product_id = '202'";

$gotResuslts = mysqli_query($db, $sql);
if ($gotResuslts)
{
    if (mysqli_num_rows($gotResuslts) > 0)
    {
        while ($row = mysqli_fetch_array($gotResuslts))
        {
?>


                <div class="card-header py-3">
          <h4 class="my-0 fw-normal"><?php echo ucfirst($row['pro_Name']); ?></h4>
        </div>
        <div class="card-body member-shopping">
          <h1 class="card-title pricing-card-title">$<?php echo ucfirst($row['pro_price']); ?></h1>
          <p class="text-start"><?php echo ucfirst($row['pro_desc']); ?></p>
          <div class="box">
          <img src="../images/shop2.png" alt="product">
          </div>


                  <?php
        }
    }
}

?>

          <form action="../processes/profile_update.php" method="POST" class="d-inline">
          <button type="submit" class="w-100 btn btn-lg btn-dark" name="buy_product" value="202">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
      <?php

$sql = "SELECT pro_Name, pro_desc, pro_price  FROM `product` WHERE product_id = '203'";

$gotResuslts = mysqli_query($db, $sql);
if ($gotResuslts)
{
    if (mysqli_num_rows($gotResuslts) > 0)
    {
        while ($row = mysqli_fetch_array($gotResuslts))
        {
?>


                <div class="card-header py-3">
          <h4 class="my-0 fw-normal"><?php echo ucfirst($row['pro_Name']); ?></h4>
        </div>
        <div class="card-body member-shopping">
          <h1 class="card-title pricing-card-title">$<?php echo ucfirst($row['pro_price']); ?></h1>
          <p class="text-start"><?php echo ucfirst($row['pro_desc']); ?></p>
          <div class="box">
          <img src="../images/shop2.png" alt="product">
          </div>


                  <?php
        }
    }
}

?>
          <form action="../processes/profile_update.php" method="POST" class="d-inline">
          <button type="submit" class="w-100 btn btn-lg btn-dark" name="buy_product" value="203">Add to Cart</button>
      </form>        
    </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
      <?php

$sql = "SELECT pro_Name, pro_desc, pro_price  FROM `product` WHERE product_id = '204'";

$gotResuslts = mysqli_query($db, $sql);
if ($gotResuslts)
{
    if (mysqli_num_rows($gotResuslts) > 0)
    {
        while ($row = mysqli_fetch_array($gotResuslts))
        {
?>


                <div class="card-header py-3">
          <h4 class="my-0 fw-normal"><?php echo ucfirst($row['pro_Name']); ?></h4>
        </div>
        <div class="card-body member-shopping">
          <h1 class="card-title pricing-card-title">$<?php echo ucfirst($row['pro_price']); ?></h1>
          <p class="text-start"><?php echo ucfirst($row['pro_desc']); ?></p>
          <div class="box">
          <img src="../images/shop2.png" alt="product">
          </div>


                  <?php
        }
    }
}

?>
          <form action="../processes/profile_update.php" method="POST" class="d-inline">
          <button type="submit" class="w-100 btn btn-lg btn-dark" name="buy_product" value="204">Add to Cart</button>
      </form>        </div>
      </div>
    </div>
  </div>
</div>


  
</main>

  </body>
  <script src="../js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>