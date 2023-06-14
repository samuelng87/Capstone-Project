<?php
session_start();
require '../general/dbcon.php';

if(isset($_POST['delete_member']))
{
    $member_id = mysqli_real_escape_string($db, $_POST['delete_member']);

    $query = "DELETE FROM members WHERE member_id='$member_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Member Account Deleted";
        header("Location: admin-member.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Delete";
        header("Location: admin-member.php");
        exit(0);
    }
}


if(isset($_POST['delete_membership']))
{
    $membership_id = mysqli_real_escape_string($db, $_POST['delete_membership']);

    $query = "DELETE FROM membership WHERE membership_id='$membership_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Membership Package Deleted";
        header("Location: membership-plan.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Membership Not Delete";
        header("Location: membership-plan.php");
        exit(0);
    }
}




if(isset($_POST['delete_trainer']))
{
    $trainer_id = mysqli_real_escape_string($db, $_POST['delete_trainer']);

    $query = "DELETE FROM trainer WHERE trainer_id='$trainer_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Trainer Deleted";
        header("Location: trainer.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Trainer not Delete";
        header("Location: trainer.php");
        exit(0);
    }
}


if(isset($_POST['delete_workout']))
{
    $event_id = mysqli_real_escape_string($db, $_POST['delete_workout']);

    $query = "DELETE FROM workout_event WHERE event_id='$event_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Class Deleted";
        header("Location: workout-event.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Class not Delete";
        header("Location: workout-event.php");
        exit(0);
    }
}


if(isset($_POST['trainer_delete_workout']))
{
    $event_id = mysqli_real_escape_string($db, $_POST['trainer_delete_workout']);

    $query = "DELETE FROM workout_event WHERE event_id='$event_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Class Deleted";
        header("Location: ../trainer/trainer-workout-event.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Class not Delete";
        header("Location: ../trainer/trainer-workout-event.php");
        exit(0);
    }
}


if(isset($_POST['delete_product']))
{
    $product_id = mysqli_real_escape_string($db, $_POST['delete_product']);

    $query = "DELETE FROM product WHERE product_id='$product_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Class Deleted";
        header("Location: product.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Class not Delete";
        header("Location: product.php");
        exit(0);
    }
}



if(isset($_POST['delete_product_order']))
{
    $product_id = mysqli_real_escape_string($db, $_POST['delete_product_order']);

    $query = "DELETE FROM order_cart WHERE order_id='$product_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Class Deleted";
        header("Location: order.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Class not Delete";
        header("Location: order.php");
        exit(0);
    }
}


if(isset($_POST['delete_payment']))
{
    $pay_id = mysqli_real_escape_string($db, $_POST['delete_payment']);

    $query = "DELETE FROM payments WHERE pay_id='$pay_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Payment Deleted";
        header("Location: payment.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Payment not Delete";
        header("Location: payment.php");
        exit(0);
    }
}

if(isset($_POST['delete_member_order']))
{
    $order_id = mysqli_real_escape_string($db, $_POST['delete_member_order']);

    $query = "DELETE FROM order_cart WHERE order_id='$order_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Class Deleted";
        header("Location: ../member/member-cart.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Class not Delete";
        header("Location: ../member/member-cart.php");
        exit(0);
    }
}




if(isset($_POST['delete_message']))
{
    $contact_id = mysqli_real_escape_string($db, $_POST['delete_message']);

    $query = "DELETE FROM contact WHERE contact_id='$contact_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Message Deleted";
        header("Location: contact-messages.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Message Delete";
        header("Location: contact-messages.php");
        exit(0);
    }
}

if(isset($_POST['update_member']))
{
    $member_id = mysqli_real_escape_string($db, $_POST['member_id']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $m_weight = mysqli_real_escape_string($db, $_POST['m_weight']);
    $height = mysqli_real_escape_string($db, $_POST['height']);


    $query = "UPDATE members 
    SET username='$username', firstname='$firstname', lastname='$lastname', email='$email', mobile='$mobile', address='$address', age='$age', m_weight='$m_weight', height='$height'
    WHERE member_id='$member_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Member Updated";
        header("Location: admin-member.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Updated";
        header("Location: admin-member.php");
        exit(0);
    }

}


if(isset($_POST['update_membership']))
{
    $member_id = mysqli_real_escape_string($db, $_POST['member_id']);
    $startdate = mysqli_real_escape_string($db, $_POST['startdate']);
    $membership_id = mysqli_real_escape_string($db, $_POST['membership_id']);
    $status = mysqli_real_escape_string($db, $_POST['status']);
 



    $query = "UPDATE members 
    SET startdate='$startdate', membership_id='$membership_id', status='$status'
    WHERE member_id='$member_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Membership Updated";
        header("Location: membership-valid.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Updated";
        header("Location: membership-valid.php");
        exit(0);
    }

}


if(isset($_POST['update_membershipplan']))
{
    $membership_id = mysqli_real_escape_string($db, $_POST['membership_id']);
    $period = mysqli_real_escape_string($db, $_POST['period']);
    $membership_price = mysqli_real_escape_string($db, $_POST['membership_price']);
    $signup_fees = mysqli_real_escape_string($db, $_POST['signup_fees']);
    $Name = mysqli_real_escape_string($db, $_POST['Name']);

 



    $query = "UPDATE membership
    SET period='$period', membership_price='$membership_price', signup_fees='$signup_fees', Name='$Name'
    WHERE membership_id='$membership_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Membership Updated";
        header("Location: membership-plan.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Updated";
        header("Location: membership-plan.php");
        exit(0);
    }

}


if(isset($_POST['update_trainer']))
{
    $trainer_id = mysqli_real_escape_string($db, $_POST['trainer_id']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $hourly_rate = mysqli_real_escape_string($db, $_POST['hourly_rate']);


    $query = "UPDATE trainer 
    SET username='$username', firstname='$firstname', lastname='$lastname', email='$email', mobile='$mobile', hourly_rate='$hourly_rate', gender='$gender'
    WHERE trainer_id='$trainer_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Trainer Updated";
        header("Location: trainer.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Trainer Not Updated";
        header("Location: trainer.php");
        exit(0);
    }

}


if(isset($_POST['update_event']))
{
    $event_id = mysqli_real_escape_string($db, $_POST['event_id']);
    $class_name = mysqli_real_escape_string($db, $_POST['class_name']);
    $event_date = mysqli_real_escape_string($db, $_POST['event_date']);
    $time_slot = mysqli_real_escape_string($db, $_POST['time_slot']);
    $trainer_id = mysqli_real_escape_string($db, $_POST['trainer_id']);



    $query = "UPDATE workout_event 
    SET class_name='$class_name', event_date='$event_date', time_slot='$time_slot', trainer_id='$trainer_id'
    WHERE event_id='$event_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Event Updated";
        header("Location: workout-event.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Event Not Updated";
        header("Location: workout-event.php");
        exit(0);
    }

}


if(isset($_POST['trainer_update_event']))
{
    $event_id = mysqli_real_escape_string($db, $_POST['event_id']);
    $class_name = mysqli_real_escape_string($db, $_POST['class_name']);
    $event_date = mysqli_real_escape_string($db, $_POST['event_date']);
    $time_slot = mysqli_real_escape_string($db, $_POST['time_slot']);
    $trainer_id = mysqli_real_escape_string($db, $_POST['trainer_id']);



    $query = "UPDATE workout_event 
    SET class_name='$class_name', event_date='$event_date', time_slot='$time_slot', trainer_id='$trainer_id'
    WHERE event_id='$event_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Event Updated";
        header("Location: ../trainer/trainer-workout-event.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Event Not Updated";
        header("Location: ../trainer/trainer-workout-event.php");
        exit(0);
    }

}


if(isset($_POST['update_product']))
{
    $product_id = mysqli_real_escape_string($db, $_POST['product_id']);
    $pro_Name = mysqli_real_escape_string($db, $_POST['pro_Name']);
    $pro_desc = mysqli_real_escape_string($db, $_POST['pro_desc']);
    $pro_type = mysqli_real_escape_string($db, $_POST['pro_type']);
    $pro_price = mysqli_real_escape_string($db, $_POST['pro_price']);
    $size = mysqli_real_escape_string($db, $_POST['size']);
    $color = mysqli_real_escape_string($db, $_POST['color']);
    $image_url = mysqli_real_escape_string($db, $_POST['image_url']);


    $query = "UPDATE product 
    SET pro_Name='$pro_Name', pro_desc='$pro_desc', pro_desc='$pro_desc', pro_type='$pro_type', pro_price='$pro_price', color='$color', image_url='$image_url'
    WHERE product_id='$product_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Product Updated";
        header("Location: product.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Product Not Updated";
        header("Location: product.php");
        exit(0);
    }

}



?>

<?php 

$server = "localhost";
$username = "root";
$password = ""; 
$dbname = "crunchfitness";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['save_package'])) {


  if(!empty($_POST['Name']) && !empty($_POST['membership_price']) && !empty($_POST['signup_fees']) && !empty($_POST['period'])) {

    $Name = $_POST['Name'];
    $membership_price = $_POST['membership_price'];
    $signup_fees = $_POST['signup_fees'];
    $period = $_POST['period'];

    $query = "INSERT INTO membership (Name,membership_price, signup_fees, period) values('$Name' , '$membership_price' , '$signup_fees' , '$period')";

    $run = mysqli_query($conn, $query) or die(mysqli_error());

    if($run) {
      echo "<p>Successfully Added</p>";
      header("Location: membership-plan.php");
      exit(0);
    } 
  }
}


if(isset($_POST['save_class'])) {


    if(!empty($_POST['class_name']) && !empty($_POST['event_date']) && !empty($_POST['time_slot']) && !empty($_POST['trainer_id'])) {
  
      $class_name = $_POST['class_name'];
      $event_date = $_POST['event_date'];
      $time_slot = $_POST['time_slot'];
      $trainer_id = $_POST['trainer_id'];
  
      $query = "INSERT INTO workout_event (class_name,event_date, time_slot, trainer_id) values('$class_name' , '$event_date' , '$time_slot' , '$trainer_id')";
  
      $run = mysqli_query($conn, $query) or die(mysqli_error());
  
      if($run) {
        header("Location: workout-event.php");
        echo "<p>Successfully Added</p>";
        exit(0);
      } 
    }
  }


  if(isset($_POST['trainer_save_class'])) {


    if(!empty($_POST['class_name']) && !empty($_POST['event_date']) && !empty($_POST['time_slot']) && !empty($_POST['trainer_id'])) {
  
      $class_name = $_POST['class_name'];
      $event_date = $_POST['event_date'];
      $time_slot = $_POST['time_slot'];
      $trainer_id = $_POST['trainer_id'];
  
      $query = "INSERT INTO workout_event (class_name,event_date, time_slot, trainer_id) values('$class_name' , '$event_date' , '$time_slot' , '$trainer_id')";
  
      $run = mysqli_query($conn, $query) or die(mysqli_error());
  
      if($run) {
        header("Location: ../trainer/trainer-workout-event.php");
        echo "<p>Successfully Added</p>";
        exit(0);
      } 
    }
  }
  







  if (isset($_POST['admin_register_trainer'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);

  
  


  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM trainer WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "Email already exists");
      }
    }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = md5($password_1);//encrypt the password before saving in the database
  
      $query = "INSERT INTO trainer (username, firstname, lastname, email, mobile, password, gender, hourly_rate)
            VALUES('$username', '$firstname', '$lastname', '$email', '$mobile', '$password', '$gender', '$hourly_rate')";
      mysqli_query($db, $query);
    $_SESSION['username'] = $username;
  	$_SESSION['message'] = "Account Created";
    $_SESSION['success'] = "Account Created";
      header('location: trainer.php');
    }
  }

?>