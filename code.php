<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_user']))
{
    $user_id = mysqli_real_escape_string($con, $_POST['delete_user']);

    $query = "DELETE FROM user WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Deleted Successfully";
        header("Location: admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Deleted";
        header("Location: admin.php");
        exit(0);
    }
}

if(isset($_POST['delete_feedback']))
{
    $feedback_id = mysqli_real_escape_string($con, $_POST['delete_feedback']);

    $query = "DELETE FROM feedback WHERE id='$feedback_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Feedback Deleted Successfully";
        header("Location: admin-feedback.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Feedback Not Deleted";
        header("Location: admin-feedback.php");
        exit(0);
    }
}

if(isset($_POST['update_user']))
{
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

    $query = "UPDATE user SET fullname='$fullname', username='$username', contact='$contact', email='$email', address='$address', password='$password', confirmpassword='$confirmpassword' WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Updated";
        header("Location: admin.php");
        exit(0);
    }

}


if(isset($_POST['save_user']))
{
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

    

    $query = "INSERT INTO user (fullname,username,contact,email,address,password,confirmpassword) VALUES ('$fullname','$username','$contact','$email','$address','$password','$confirmpassword')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "User Created Successfully";
        header("Location: user-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Created";
        header("Location: user-create.php");
        exit(0);
    }
}
?>