<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>RECORDS</title>
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
if($_SERVER['REQUEST_METHOD'] =='POST'){



$dist=$_POST['dist'];
$state=$_POST['state'];
$country=$_POST['country'];





$sql="select * from `camp` where `dist`='$dist' and `state` ='$state' and `country` = '$country'";
$result=mysqli_query($conn , $sql);
while($row=mysqli_fetch_assoc($result)){

    echo '              <div class="shadow p-3 mb-5 bg-white rounded">

    <div style="width:100%;">
        <div class="row no-gutters">
            <div class="col-md-4">
    
    
                <!-- Image -->
    
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Camp Images/'.$row['file'].'" width="350" height="350" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Camp Images/'.$row['file1'].'" width="350" height="350" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Camp Images/'.$row['file2'].'" width="350" height="350" class="d-block w-100"
                                alt="...">
                        </div>
    
                        <div class="carousel-item">
                            <img src="Camp Images/'.$row['file3'].'" width="350" height="350" class="d-block w-100"
                                alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
    
    
    
    
    
                <!-- Image -->
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="text-center"><b><i>'.$row['name_asso'].'</i></b></h3>
    
                    <h3 class="text-center my-4"><b><i>'.$row['name_owner'].'</i></b></h3>
    
                    <p class="text-center my-4"><b><i>'.$row['details'].'</i></b> </p>
                    <div class="d-flex justify-content-between my-4">
    
                        <h6>Country : '.$row['country'].' </h6> : <h6>State : '.$row['state'].' </h6> : <h6>District : '.$row['dist'].' </h6> :
    
    
                    </div>
    
                    <div class="form-group d-flex justify-content-center">
    
                        <a href="view_camp.php?camp='.$row['slno'].'"><button type="button"
                                class="btn btn-outline-success my-4">View Details</button></a>
    
                    </div>
    
    
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    </div><hr>';
}
}
?>





            </div>
        </div>
    </div>
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