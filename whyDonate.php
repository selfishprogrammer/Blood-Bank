<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Why To Donate Blood</title>
</head>

<body style="background-image:url(img/back5.png);">
    <?php 
    
    include 'header.php';
    include 'dbconn.php';
    
    ?>


    <div class="container">
        <div class="card my-4">
            <?php 


include 'search.php';
?>
            <div class="card-body" style="background-image: url(img/back5.png);">
            <hr><h4 class="text-center my-3">WHY TO <span style="color:pink;">DONATE </span><span style="color:red;"> BLOOD</span></h4><hr>

<?php 


$sql="select * from `why_to_donate`";
$result= mysqli_query($conn , $sql);

while($row=mysqli_fetch_assoc($result)){
echo ' <div style="max-width:100%;">
<div class="row no-gutters">
    <div class="col-md-4">
        <img src="img/'.$row['img'].'" class="card-img" alt="..." width="350" height="350">
    </div>
    <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title text-center my-4"><b><i>'.$row['title'].'</i></b></h5>
            <p class="card-text my-4 text-center"><b><i>'.$row['desp'].'</p></i></b>

        </div>
    </div>
</div>
</div>
<hr>';
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