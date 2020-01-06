<?php
   session_start(); 
include('server.php') ;
   
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.main
{
    width:500px ;
    height:300px ;
    margin:150px ;
}

button {
  background-color:yellow;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}



.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}



@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
 
}
</style>
</head>
<body style="background-color:#2F4F4F">

<h2>Login Form</h2>
<div     align="center" class="main">
<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="download.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Enrollment_number</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required/>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required/>
        
    <input name="login" type="submit" id="login_bt" value="login">
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  </div>
</form></div>

</body>
</html>

<?php
        if(isset($_POST['login']))
        {
          $username=$_POST['uname'];
          $password=$_POST['pass'];
          $query="select * from student WHERE username='$username' AND password='$password'";
          $query_run = mysqli_query($con , $query) ;
          if(mysqli_num_rows($query_run) == 1)
          {
              //correct
              $_SESSION['username']=$username;
              $name = $query_run->fetch_assoc();
              $_SESSION['name'] = $name['name'];
              header('location:admindash.php');
          }
          else{
              
             echo '<script>alert("incorrect password or username") ;
              </script>';
          

          }
        }





?>
