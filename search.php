<div class="card-header text-center" style="background-color: red;">

    <h3 style="color:cornsilk;"> <b><i>Welcome To Rakt Siwir</i></b></h3>
    <div class="d-flex  justify-content-end">

        <?php 
include 'dbconn.php';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){

        $user=$_SESSION['username'];
        $sql="select * from `register` where `phone` = '$user'";
        $result=mysqli_query($conn ,$sql);
        while($row=mysqli_fetch_assoc($result)){
          $user1=$row['name'];
          echo '
         <p>
          <b><i>
          <a href="logout.php"> <img src="img/signup.png" class="ml-2" height="30" width="30" alt=""></a>
            <a class="nav-link" href="logout.php"  style="color: black;">'.$user1.'</a>
          </li></i></b></p>
          <p>
          <b><i>
          <a href="profile.php"> <img src="img/signup.png" class="ml-2" height="30" width="30" alt=""></a>
            <a class="nav-link" href="profile.php"  style="color: black;">Your Profile</a>
          </li></i></b></p>
     ';
        }
    }
    ?>



    </div>

</div>
<div class="card-header text-center" style="background-image: url(img/back6.png); ">
    <form action="record.php" method="post">
        <div class="d-flex justify-content-between">
            <div class="row">
                <div class="form-group mx-4">
                    <h6 class="text-center"><b> Blood Group</b></h6>
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
                <div class="form-group mx-4">
                    <h6 class="text-center"><b>Select Country</b></h6>
                    <select name="country" id="" class="form-control">

                        <option value="">--Select Your Country--</option>
                        <option value="India">India</option>



                    </select>


                </div>


                <div class="form-group mx-4">
                    <h6 class="text-center"><b>Select State</b></h6>
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

                <div class="form-group mx-4">
                    <h6 class="text-center"><b>Select Dist</b></h6>
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



            </div>
        </div>
        <div class="form-group d-flex justify-content-center">

            <button type="submit" class="btn btn-warning  my-4 mx-1" style="width:18rem;">Check</button>

        </div>
    </form>






</div>


