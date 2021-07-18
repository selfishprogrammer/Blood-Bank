
<?php 

include 'dbconn.php';

?>


<?php 

session_start();
echo '<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#" style="color: whitesmoke;"><i><b>Rakt Siwir</b></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <b><i><li class="nav-item active mx-3">
      <a href="index.php"><img src="img/home.png" class="mx-3" height="30" width="30" alt=""></a>
        <a class="nav-link active" href="index.php"  style="color: black;" >Home <span class="sr-only">(current)</span></a>
      </li></i></b>
      <b><i> <li class="nav-item mx-3" >
      <a href="whyDonate.php"><img src="img/question.png" class="ml-4" height="30" width="30" alt=""></a>
        <a class="nav-link active" href="whyDonate.php" style="color: black;">? Donate</a>
      </li></i></b>
     
      <b><i><li class="nav-item active mx-3" style="color: whitesmoke;">
      <a href="news.php"><img src="img/news.png" class="ml-3" height="30" width="30" alt=""></a>
        <a class="nav-link" href="news.php"  style="color: black;">News</a>
      </li></i></b>
      <div class="d-flex justify-content-end">
';



if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){






}
else{
  echo '     <b><i><li class="nav-item active mx-3" style="color: black;">
  <a href="signup.php"> <img src="img/signup.png" class="ml-5" height="30" width="30" alt=""></a>
    <a class="nav-link" href="signup.php"  style="color: black;">Doner Register</a>
  </li></i></b>


  <b><i><li class="nav-item active mx-3" style="color: black;">
  <a href="login.php"><img src="img/login.png" class="ml-3" height="30" width="30" alt=""></a>
    <a class="nav-link" href="login.php"  style="color: black;">Login</a>
  </li></i></b>


  
  ';

}


 
echo '
      
<b><i><li class="nav-item active mx-3" style="color: black;">
<a href="camp.php"><img src="img/d.png" class="ml-5" height="30" width="30" alt=""></a>
  <a class="nav-link" href="camp.php"  style="color: black;">Add Donation Camp</a>
</li></i></b>

<b><i><li class="nav-item active mx-3" style="color: black;">
<a href="fetch_camp.php"><img src="img/d.png" class="ml-5" height="30" width="30" alt=""></a>
  <a class="nav-link" href="fetch_camp.php"  style="color: black;">View Donation Camp</a>
</li></i></b>


    
</div>
  </div>
</nav></div>';

?>
