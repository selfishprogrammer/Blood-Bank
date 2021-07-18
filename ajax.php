<?php 

include 'dbconn.php';

$id=$_GET['state'];
$sql="select * from `cities` where `id`='$id'";
$result=mysqli_query($conn ,$sql);
echo '<option value="">----Select Your Dist ----</option>';
while($row=mysqli_fetch_assoc($result)){
    
echo '   



<option value="'.$row['cities_name'].'">'.$row['cities_name'].'</option>





';
}
?>

