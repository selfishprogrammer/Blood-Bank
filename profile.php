<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Donation Camps Details</title>
</head>

<body style="background-image:url(img/back5.png)">


    <?php


include 'header.php';
include 'dbconn.php';

?>

    <div class="container">
        <div class="card my-4">

            <?php 


include 'search.php';

?>

            <div class="card-body">
             
<?php
$slno=$_SESSION['username'];
$sql="select * from `register` where `phone`='$slno'";
$result=mysqli_query($conn , $sql);
while($row=mysqli_fetch_assoc($result)){


    echo '
    
    <div style="width: 100%;height:100%;">

   
    <div class="card-body">
        

        <h5 class="my-4"><b><i>Name Of Doner : <span style="color: red;">
        '.$row['name'].'</span></i></b></h5>
      
        <h5 class="my-4"><b><i>Email : <span style="color: red;"> '.$row['email'].'</span></i></b></h5>
        <h5 class="my-4"><b><i>Phone :<span style="color: red;"> '.$row['phone'].'</span></i></b></h5>
        <h5 class="my-4"><b><i>Blood Group :<span style="color: red;"> '.$row['blood'].'</span></i></b></h5>

        <div class="d-flex justify-content-between my-4">

            <b><i>
                    <h5>Country : <span style="color: red;"> '.$row['address'].'</span> </h5>
                </i></b> : <b><i>
                    <h5>State : <span style="color: red;"> '.$row['state'].'</span></h5>
                </i></b> : <b><i>
                    <h5>District
                        : <span style="color: red;"> '.$row['dist'].'</span></h5>
                </i></b> :


        </div>

   
       
    </div>
</div>';


}

?>


<div class="d-flex justify-content-between">
<a href="delete_doner.php"><button type="button" class="btn btn-info">DELETE</button></a>
<button type="button" class="btn btn-info">UPDATE</button>
</div>





            </div>

        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>