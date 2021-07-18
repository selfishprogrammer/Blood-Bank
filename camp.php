<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Add  Your Camp</title>
  </head>
  <body style="background-image:url(img/back5.png)">
  <?php


     include 'header.php';
    include 'dbconn.php';
    
    ?>

    <div class="container">
        <div class="card my-4">

       

<div class="card-body"  style="background-image:url(img/back5.png)">
<div class="card-header" style="background-color: white;">

<h5 class="text-center">Add Your Camp Information</h5>


<?php 


if($_SERVER['REQUEST_METHOD'] == 'POST'){

$name_owner=$_POST['owner'];
$name_asso=$_POST['club'];

$email=$_POST['email'];
$phone=$_POST['phone'];

$address=$_POST['address'];
$pin=$_POST['pin'];

$map=$_POST['map'];
$country=$_POST['country'];

$state=$_POST['state'];
$dist=$_POST['dist'];
$details=$_POST['details'];


$start=$_POST['start'];

$end=$_POST['end'];
$start_t=$_POST['start_t'];
$end_t=$_POST['end_t'];



$file=$_FILES['file']['name'];
$file1=$_FILES['file1']['name'];
$file2=$_FILES['file2']['name'];
$file3=$_FILES['file3']['name'];

$file_t=$_FILES['file']['tmp_name'];
$file1_t=$_FILES['file1']['tmp_name'];
$file2_t=$_FILES['file2']['tmp_name'];
$file3_t=$_FILES['file3']['tmp_name'];

$inside_destination='Camp Images/'.$file;
move_uploaded_file($file_t , $inside_destination); 

$inside_destination1='Camp Images/'.$file1;
move_uploaded_file($file1_t , $inside_destination1); 

$inside_destination2='Camp Images/'.$file2;
move_uploaded_file($file2_t , $inside_destination2); 

$inside_destination3='Camp Images/'.$file3;
move_uploaded_file($file3_t , $inside_destination3); 




$sql="insert into `camp` (`name_owner`,`name_asso`,`email`,`phone`,`full_address`,`pincode`,`map`,`country`,`state`,`dist`,`file`,`file1`,`file2`,`file3`,`details`,`start_date`,`end_date`,`start_time`,`end_time`) values ('$name_owner','$name_asso','$email','$phone','$address','$pin','$map','$country','$state','$dist','$file','$file1','$file2','$file3','$details','$start','$end','$start_t','$end_t')";

$result=mysqli_query($conn , $sql);

if($result){

    echo "Inserted";

}
else{

    echo "Not Inserted";

}
}
?>


</div>




<form action="<?php $_SERVER['REQUEST_URI'] ?>" class="my-4" method="post" enctype="multipart/form-data">

<div class="form-group">

<input type="text" name="owner" id="" class="form-control" placeholder="Owner/Head of Association Name">

</div>

<div class="form-group">

<input type="text" name="club" id="" class="form-control" placeholder="Association / Club Name">

</div>

<div class="form-group">

<input type="email" name="email" id="" class="form-control" placeholder="Email Of Association">

</div>


<div class="form-group">

<input type="number" name="phone" class="form-control" id="" placeholder="Phone Number">

</div>

<div class="form-group">

<input type="text" name="address" class="form-control" id="" placeholder="Full Address">

</div>


<div class="form-group">

<input type="number" name="pin" class="form-control" id="" placeholder="Pincode">

</div>

<div class="form-group">

<input type="text" name="map" class="form-control" id="" placeholder="Google Map Link">

</div>

<div class="form-group">
<select name="country" id=""  class="form-control">

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
<script>
                function State_list() {
                    var xml = new XMLHttpRequest();
                    xml.open("GET", "ajax.php?state=" + document.getElementById("stateid").value, false);
                    xml.send(null);

                    document.getElementById("dist").innerHTML = xml.responseText;
                }
                </script>

<div class="form-group">

<input type="file"  name="file"  id="" placeholder="Add Photo of Association">

</div>

<div class="form-group">

<input type="file"  name="file1"  id="" placeholder="Add Photo of Association">

</div>

<div class="form-group">

<input type="file"  name="file2"  id="" placeholder="Add Photo of Association">

</div>

<div class="form-group">

<input type="file"  name="file3"  id="" placeholder="Add Photo of Association">

</div>


<div class="form-group">
<label for="start">Start date:</label>

<input type="date" name="start" class="form-control">


</div>
<div class="form-group">
<label for="start">End date:</label>

<input type="date" name="end" class="form-control">


</div>



<div class="form-group">
<label for="start">Open Time:</label>

<input type="time" name="start_t" class="form-control">


</div>
<div class="form-group">
<label for="start">Close Time:</label>

<input type="time" name="end_t" class="form-control">


</div>

<div class="form-group">

<textarea name="details" class="form-control" id="" style="height: 200px;" placeholder="Your Description (500 words)"></textarea>

</div>

<div class="form-group">

<button type="submit" class="btn btn-outline-danger form-control">Add Your Info</button>

</div>
</form>

</div>



        </div>
    </div>
   



















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>