<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
</head>

<body style="background-image:url(img/back5.png)">
    <?php include 'header.php'; 
    include 'dbconn.php';?>

    <div class="container">

    <div class="d-flex justify-content-center">

            <div class="card-header my-4">
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <h4 class="text-center">LOGIN</h4>
                    <hr>
                    
                    <div class="form-group">

                        <input type="number" placeholder="Phone" name="phone" class="form-control my-2" id="">

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-outline-info form-control" id="">Login</button>

                    </div>
                </form>
            </div>

        </div>
    </div>


    <?php 
    if($_SERVER['REQUEST_METHOD']   ==  'POST'){
        $login=false;
    $username=$_POST['phone'];
    $sql="select `phone` from `register` where `phone` ='$username'";
    $result=mysqli_query($conn , $sql);
    $num=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);


if($num==1){
    
$row=mysqli_fetch_assoc($result);
   
     
session_start();
$login=true;
    $_SESSION['loggedin']  =true;
    $_SESSION['slno'] =$row['slno'];
    $_SESSION['username'] =$username;
   
     
  
    
    echo "logged in Successful";


    header('location:index.php');

    }
    else{
        echo "Failed";
    }



    }
    
    
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>