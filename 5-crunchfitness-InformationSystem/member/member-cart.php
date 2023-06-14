<?php
session_start();
include ('../general/dbcon.php');
include ('../general/sever.php');
include ('../admin/code.php');

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
    <?php include ('../components/member-navbar.php'); ?>
    </header>
    <!-- /navbar -->
    <main class="margin-t-shopping container">

   

  
      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-dark">Your cart</span>
            
          </h4>
          <ul class="list-group mb-3">
                        <?php
              $currentUser = $_SESSION['username'];
              $sql = "SELECT * FROM members 
                    INNER JOIN order_cart ON members.member_id = order_cart.member_id
                    INNER JOIN product ON product.product_id = order_cart.product_id
                    WHERE username ='$currentUser'";

              $gotResuslts = mysqli_query($db, $sql);
              if ($gotResuslts)
              {
                  if (mysqli_num_rows($gotResuslts) > 0)
                  {
                      while ($row = mysqli_fetch_array($gotResuslts))
                      {
              ?>
          <form action="member-cart.php" method="post">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                              <h6  class="my-0"><?php echo ucfirst($row['pro_Name']); ?></h6>
                              <small class="text-muted"><?php echo ucfirst($row['pro_desc']); ?></small>
                            </div>
                            <span  class="text-muted">$<?php echo ucfirst($row['pro_price']); ?></span>
                            <span  class="text-muted"></span>
                            <input type="hidden" value="<?php echo ucfirst($row['member_id']); ?>" name="member_id">
                            <input type="hidden" value="<?php echo ucfirst($row['product_id']); ?>" name="product_id">
                            <input type="hidden" value="<?php echo ucfirst($row['order_id']); ?>" name="order_id">
                            <input type="hidden" value="<?php echo ucfirst($row['pro_price']); ?>" name="amount">

                          </li>



                            <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Debit/Credit Card</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <div class="row gy-3 text-start">
                  <div class="col-md-6">
                    <label for="cc-name" class="form-label">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback"> Name on card is required </div>
                  </div>
                  <div class="col-md-6">
                    <label for="cc-number" class="form-label">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback"> Credit card number is required </div>
                  </div>
                  <div class="col-md-3">
                    <label for="cc-expiration" class="form-label">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback"> Expiration date required </div>
                  </div>
                  <div class="col-md-3">
                    <label for="cc-cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback"> Security code required </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <i class="fa fa-cc-visa" style="color:navy; font-size:45px"></i>
              <i class="fa fa-cc-mastercard" style="color:black; font-size:45px"></i>
              <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" name="pay_cart" class="btn btn-dark">Pay Now</button>

              <small class="text-muted">*Crunch Fitness accepts all major credit and debit cards</small>
              
            </div>
          </div>
        </div>
      </div>

      </form>
                                <?php
                      }
                  }
              }




              ?>


            <li class="list-group-item d-flex justify-content-between">
              <span>Total (AUD)</span>
            </li>
          </ul>
          <button type="button" class="btn btn-dark" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#exampleModal"> Continue Checkout </button>
          
        </div>
        <?php



$server = "localhost";
$username = "root";
$password = ""; 
$dbname = "crunchfitness";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['pay_cart'])) {


  if(!empty($_POST['member_id']) && !empty($_POST['product_id']) && !empty($_POST['order_id']) && !empty($_POST['amount'])) {

    $member_id = $_POST['member_id'];
    $product_id = $_POST['product_id'];
    $order_id = $_POST['order_id'];
    $amount = $_POST['amount'];


    $query = "INSERT INTO payments(member_id,product_id,order_id,amount) values('$member_id' , '$product_id' , '$order_id' , '$amount')";

    $run = mysqli_query($conn, $query) or die(mysqli_error());

    if($run) {
      echo '<p class="alert alert-success">Payment Successfully Made</p>';
    } 
  }
}



?>
        <div class="col-md-7 col-lg-8">
          <div class="row g-3">
            <h4 class="mb-3">Selected</h4>


            <?php
$currentUser = $_SESSION['username'];
$sql = "SELECT * FROM members 
      INNER JOIN order_cart ON members.member_id = order_cart.member_id
      INNER JOIN product ON product.product_id = order_cart.product_id
      WHERE username ='$currentUser'";

$gotResuslts = mysqli_query($db, $sql);
if ($gotResuslts)
{
    if (mysqli_num_rows($gotResuslts) > 0)
    {
        while ($row = mysqli_fetch_array($gotResuslts))
        {
?>


<div class="cart-items d-flex w-100">


<div class="cart-box col d-flex">
  <img class="pt-2" src="../images/shop2.png" alt="">
  <p class="p-2">
  <br>   Product Name : <?php echo ucfirst($row['pro_Name']); ?>
  <br>
<br>  Price : <?php echo ucfirst($row['pro_price']); ?> 
<br>
</p>
</div>
<div class="cart-box col text-end p-1">
<form action="../admin/code.php" method="POST" class="d-inline">
<button type="submit" class="btn btn-sm btn-light" value="<?= $row['order_id']; ?>" name="delete_member_order">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg text-dark" viewBox="0 0 16 16">
        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
      </svg>
              </button>


  </form>

</div>


</div>


                  <?php
        }
    }
}

?>


          </div>
        </div>
      </div>
    

    </main>
  </body>
  <script src="../js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>



