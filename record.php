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


include 'search.php';




?>
            <div class="card-body">




                <?php 
if($_SERVER['REQUEST_METHOD'] =='POST'){


$blood=$_POST['blood'];
$dist=$_POST['dist'];
$state=$_POST['state'];
$country=$_POST['country'];





$sql="select * from `register` where `blood`='$blood' and `dist`='$dist' and `state` ='$state' and`address` = '$country'";
$result=mysqli_query($conn , $sql);
while($row=mysqli_fetch_assoc($result)){
echo '<table class="table table-bordered table-dark">
<thead>
  <tr>
    <th scope="col">Serial No</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Phone</th>
    <th scope="col">Blood Group</th>
    <th scope="col">Country</th>
    <th scope="col">State</th>
    <th scope="col">Dist</th>
  </tr>
</thead>
<tbody>





  <tr>
    <td>'.$row['slno'].'</td>
    <td>'.$row['name'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['phone'].'</td>
    <td>'.$row['blood'].'</td>
    <td>'.$row['address'].'</td>
    <td>'.$row['state'].'</td>
    <td>'.$row['dist'].'</td>
  </tr>
 
</tbody>
</table>';
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