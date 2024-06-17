<?php
session_start();
require 'dbcon.php';

if(isset($_POST['update_profile']))
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
        $_SESSION['message'] = "Profile updated successfully!";
        header("Location: profile.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Profile not updated";
        header("Location: profile.php");
        exit(0);
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
  
    <title>TopHealth</title>
    <link rel="icon" href="images/logo and design/Health Shop Logo.png" type="image/icon type">
</head>
<body>
<nav>
        <div class="logo"> 
         <img src="images/logo and design/Health Shop Logo.png" alt="Logo" width="80" height="80"> 
         <a> TopHealth </a> 
     </div>
     
       
      
        
     <div class="navLinks">
          <ul>
             <li><a href="home-logged.php">Home</a></li>
             <li><a href="about-logged.php">About</a></li>
             <li><a href="products-logged.php">Products</a></li>
            
             <li><a href="contact-logged.php">Contact</a></li>
     
             <div class="dropdown">
                 <a class="fa fa-user" style="font-size:24px; color: #2691d9"></a>
                 <div class="dropdown-content">
                 <a href="#">Profile</a>
                    <a href="login-admin.php">Admin</a>
                   <a href="logout.php">Logout</a>
                 </div>
               </div>
              
        
          </ul>
        </div>
     
        
      </nav>
    <div  class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div style="border-style: solid;
    border-color: #2691d9; border-width: 3px; border-radius: 10px;" class="card">
                    <div class="card-header">
                        <h4>Profile edit
                            <a href="profile.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM user WHERE id='$user_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>
                                <form action="profile-edit.php" method="POST">
                                    <input type="hidden" name="user_id" value="<?= $user['id']; ?>">

                                    <div class="mb-3">
                                        <label>Fullname</label>
                                        <input type="text" name="fullname" value="<?=$user['fullname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Username</label>
                                        <input type="text" name="username" value="<?=$user['username'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone number</label>
                                        <input type="number" name="contact" value="<?=$user['contact'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email Address</label>
                                        <input type="email" name="email" value="<?=$user['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Complete Address</label>
                                        <input type="text" name="address" value="<?=$user['address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="password" name="password" value="<?=$user['password'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Confirm password</label>
                                        <input type="password" name="confirmpassword" value="<?=$user['confirmpassword'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_profile" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No such profile found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>