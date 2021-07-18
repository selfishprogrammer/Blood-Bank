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


include 'camp_search.php';

?>

            <div class="card-body">
             
<?php
$slno=$_GET['camp'];
$sql="select * from `camp` where `slno`='$slno'";
$result=mysqli_query($conn , $sql);
while($row=mysqli_fetch_assoc($result)){


    echo '
    <div class="card-header" style="background-color: yellowgreen;">
    <h3 class="text-center"><b><i> <span style="color: red;"> '.$row['name_asso'].'</span></i></b></h3>
    </div>
    <div style="width: 100%;height:100%;">

    <!-- Image -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Camp Images/'.$row['file'].'" class="d-block w-100" width="100%" height="300px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="Camp Images/'.$row['file1'].'" class="d-block w-100" width="100%" height="300px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="Camp Images/'.$row['file2'].'" class="d-block w-100" width="100%" height="300px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="Camp Images/'.$row['file3'].'" class="d-block w-100" width="100%" height="300px" alt="...">
            </div>
        </div>
    </div>
    <!-- Image -->
    <div class="card-body">
        

        <h5 class="my-4"><b><i>Name Of Head/Owner : <span style="color: red;">
        '.$row['name_owner'].'</span></i></b></h5>
        <h5 class="my-4"> <b><i>Decription Of Association :<span style="color: red;"> '.$row['details'].'</i></b></span></h5>
        <h5 class="my-4"><b><i>Email : <span style="color: red;"> '.$row['email'].'</span></i></b></h5>
        <h5 class="my-4"><b><i>Phone :<span style="color: red;"> '.$row['phone'].'</span></i></b></h5>


        <div class="d-flex justify-content-between my-4">

            <b><i>
                    <h5>Country : <span style="color: red;"> '.$row['country'].'</span> </h5>
                </i></b> : <b><i>
                    <h5>State : <span style="color: red;"> '.$row['state'].'</span></h5>
                </i></b> : <b><i>
                    <h5>District
                        : <span style="color: red;"> '.$row['dist'].'</span></h5>
                </i></b> :


        </div>

        <h5 class="my-4"><b><i>Map Location : <span style="color: red;"> '.$row['map'].'</span></i></b></h5>
        <h5 class="my-4"><b><i>Full Address :<span style="color: red;"> '.$row['full_address'].'</span></i></b></h5>
        <h5 class="my-4"><b><i>Pincode/Postcode :<span style="color: red;"> '.$row['pincode'].'</span></i></b></h5>
        <div class="d-flex justify-content-between my-4">

            <b><i>
                    <h5>Start Date : <span style="color: red;"> '.$row['start_date'].'</span> </h5>
                </i></b> : <b><i>
                    <h5>End Date: <span style="color: red;"> '.$row['end_date'].'</span></h5>
                </i></b>


        </div>
        <div class="d-flex justify-content-between my-4">

            <b><i>
                    <h5>Starting Time : <span style="color: red;"> '.$row['start_time'].'</span> </h5>
                </i></b> : <b><i>
                    <h5>Ending Time: <span style="color: red;"> '.$row['end_time'].'</span></h5>
                </i></b>


        </div>
    </div>
</div>';


}

?>





                





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