<?php include 'fileslogic7.php';

session_start();

     if(isset($_GET['logout']))
     {
       session_unset();
       session_destroy();
       header('location:login.php');
       echo "Logged out!";
     }

     if(!isset($_SESSION['username'])){
       header('location: login.php');
     }

?>

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  form {
  width: 30%;
  margin: 100px auto;
  padding: 30px;
  border: 3px solid #555;
  background-color:RGB(128, 0, 0);
}
input {
  width: 100%;
  border: 1px solid #f1e1e1;
  display: block;
  padding: 5px 10px;
}
button {
  border: none;
  padding: 10px;
  border-radius: 5px;
}
table {
  width: 60%;
  border-collapse: collapse;
  margin: 100px auto;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 1px solid black;
}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
  </style>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body style="  background-color:#800080;">
  <a href="admindash.php">back to dashboard</a>

    <div class="hunt">
      <div class="row">
        <form action="subject7.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
    <h3>LIST OF UPLOADED FILES --></h3>

    <div style="background-color:blue;margin-right:300px;">
          <?php 
          include('dbcon.php');
          //session_start();
          $self_ID = $_SESSION['id'];
          $files  = mysqli_query($con, "SELECT name from files7 where userID = $self_ID");
          
$i = 1;
          while($row = $files->fetch_assoc()){

            echo $i.". ".$row['name']."<br>"."<br>";?><a href="downloads.php"> [[Download]]</a><?php
            $i += 1;
          }
          ?>
       </div>  
  </body>
</html>