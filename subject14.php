<?php include 'fileslogic.php';

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

  </style>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body style="  background-color:#800080;">
    <div class="container">
      <div class="row">
        <form action="subject1.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <?php 
          include('dbcon.php');

          $files  = mysqli_query($con, "SELECT name from files1");
          
$i = 1;
          while($row = $files->fetch_assoc()){

            echo $i.". ".$row['name']."<br>";
            $i += 1;
          }
          ?>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>