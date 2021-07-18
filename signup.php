<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SignUp</title>
</head>

<body style="background-image:url(img/back5.png)">

    <?php 
      include 'header.php';
      include 'dbconn.php';
      
      ?>

    <div class="container col-md-6 ">

        <div class="d-flex justify-content-center">

            <div class="card my-4">

                <div class="card-header">

                    <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" id="number" placeholder="Phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" name="age" id="name" placeholder="Age" class="form-control">
                        </div>
                        <div class="form-group">
                            <select name="address" id="" class="form-control">

                                <option value="">--Select Your Country--</option>
                                <option value="India">India</option>



                            </select>
                        </div>
                     
                        <div class="form-group">
                            <select name="state" id="stateid" onChange="State_list()" class="form-control">

                                <option value="">---Select Your State ---</option>
                                <?php 
$sql="select * from `states`";
$result=mysqli_query($conn ,$sql);
while($row=mysqli_fetch_assoc($result)){
    $id=$row['slno'];
    echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
    
}
?>




                            </select>
                        </div>
                        <div class="form-group">
                            <select name="dist" id="dist" class="form-control">

                                <option value="">---- Select Your Dist ----</option>





                            </select>
                        </div>
                        <div class="form-group">

                            <select name="blood" id="" class="form-control">

                                <option value="">--Select Blood Group--</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="AB">AB</option>
                                <option value="B-">B-</option>
                                <option value="B+">B+</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>


                            </select>


                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info form-control">Submit</button>
                        </div>


                    </form>
                </div>


            </div>


        </div>

    </div>

    <?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $city=$_POST['dist'];
    $state=$_POST['state'];
    $blood=$_POST['blood'];

$sql1="select `phone` and `email` from `register` where `phone`='$phone' and `email`='$email'";
$result1=mysqli_query($conn , $sql1);

$num=mysqli_num_rows($result1);
if($num==1){
    echo "Email Or Phone Already Exist";


}
 
else{



$sql="insert into `register` (`name`,`email`,`phone`,`age`,`address`,`dist`,`state`,`blood`) values('$name','$email','$phone','$age','$address','$city','$state','$blood')";
$result=mysqli_query($conn , $sql);

if($result){

    echo "Successfuly Inserted";

}
}

}



?>

    <script>
    function State_list() {
        var xml = new XMLHttpRequest();
        xml.open("GET", "ajax.php?state=" + document.getElementById("stateid").value, false);
        xml.send(null);

        document.getElementById("dist").innerHTML = xml.responseText;
    }
    </script>

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