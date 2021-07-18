<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Camps</title>
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

$sql="select * from `camp`";
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