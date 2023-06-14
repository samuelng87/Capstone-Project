<?php
session_start();


if (isset($_POST['update_photo']))
{

    include ('../general/dbcon.php');

    $userImage = $_FILES['userImage'];

    if (!empty($userImage) && !empty($userImage))
    {

        $imageName = $userImage['name'];
        $fileType = $userImage['type'];
        $fileSize = $userImage['size'];
        $fileTmpName = $userImage['tmp_name'];
        $fileError = $userImage['error'];

        $fileImageData = explode('/', $fileType);
        $fileExtension = $fileImageData[count($fileImageData) - 1];

        if ($fileExtension == 'jpg' || $fileExtension == 'png' || $fileExtension == 'jpeg')
        {
            //Process Image
            if ($fileSize < 5000000)
            {
                //var_dump(basename($imageName));
                $fileNewName = "../public/userImages/" . $imageName;

                $uploaded = move_uploaded_file($fileTmpName, $fileNewName);

                if ($uploaded)
                {
                    $loggedInUser = $_SESSION['username'];

                    $sql = "UPDATE members SET user_image='$imageName' WHERE username = '$loggedInUser'";

                    $results = mysqli_query($db, $sql);

                    header('Location:../member/member-account.php?success=userUpdated');
                    exit;
                }

            }
            else
            {
                header('Location:../member/member-account.php?error=invalidFileSize');
                exit;
            }
            exit;
        }
        else
        {
            header('Location:../member/member-account.php?error=invalidFileType');
            exit;
        }

    }
    else
    {
        exit;
    }

}



if (isset($_POST['address_profile']))
{

    include ('../general/dbcon.php');

    $address = $_POST['address'];
    $age = $_POST['age'];
    $m_weight = $_POST['m_weight'];
    $height = $_POST['height'];

    $loggedInUser = $_SESSION['username'];



    $sql = "UPDATE members SET address = '$address', age = '$age', m_weight = '$m_weight', height = '$height' WHERE username = '$loggedInUser'";

    $results = mysqli_query($db, $sql);
    header('Location:../member/member-account.php?succeed=address_profile_updated');
    exit;

}

if (isset($_POST['personal_information']))
{

    include ('../general/dbcon.php');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $height = $_POST['height'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];

    $loggedInUser = $_SESSION['username'];

    $sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', email = '$email', mobile = '$mobile', gender = '$gender' WHERE username = '$loggedInUser'";

    $results = mysqli_query($db, $sql);
    header('Location:../member/member-account.php?succeeded=profile_updated');
    exit;
}



if (isset($_POST['buy_product']))
{

    include ('../general/dbcon.php');


    $member_id = $_SESSION['member_id'];
    $product_id = $_POST['buy_product'];



    $sql = "INSERT INTO order_cart (member_id, product_id, quatity)
    VALUES('$member_id', '$product_id', '1')";

    $results = mysqli_query($db, $sql);
    header('Location:../member/member-shopping.php?succeeded=profile_updated');
    exit;
}






?>



