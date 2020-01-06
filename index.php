<?php 
include('server.php');
?>
<!DOCTYPE html>
<html lang="en_US">
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<style>
td{
    width:80px;
    border-color:red;
    background-color:#4B6576;
    text-decoration:bold;
} 
.bg-image {
  background-image: url("smsimg.jpg");
  filter: blur(8px);
  -webkit-filter: blur(8px);  
  height: 100%; 
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bg-text {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4); 
  color: black;
  font-weight: bold;
  border: 10px solid yellow;
  border-style: dotted;
  box-shadow: 5px 10px red;

  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>
      <meta charset="UTF-8">
      <title>student management syatem</title>

</head>
<body >
<div class="bg-image"></div>
<div class="bg-text">

<div class="navbar">
  <a class="active" href="#"><i class="home"></i> Home</a> 
  <a href="#"><i class="search"></i> Search</a> 
  <a href="#"><i class="envelope"></i> Contact</a> 
  <a href="login.php"><i class="user"></i> Login</a>
  </div>

<h3 align="center" style="background-color:blue ; color:red ;">welcome to student management system</h3>
<div class="info">
<p><b>you can register here to manage<br>
your study base system </b></p>
</div>
<form  method="post" action="index.php">
<table style="width:40%; height:100%; padding:10px;" align="center" border="10px">
    <tr>
        <td colspan="2" align="center"><b>student info</b></td>
    </tr>
    <TR><TD>enter you name</TD>
    <td><input type="char" name="name" required/></td>
    </TR>

    <tr>
        <td align="right">choose branch</td><td>
        <input list="branches" name="branch" required/>
        <datalist id="branches">
            <option>chemical</option>
            <option >computer science</option>
            <option >civil</option>
            <option>polymer science</option>
            <option>electrical</option>
            <option>ece</option>
            <option>msm</option>
            <option>gt/gpt</option>
            <option>metallurgy</option>

        </datalist>
        
        </td>
    </tr>
    <tr>
    <td>HOSTEL</td>
    <td> 
        <input list="hostel" name = "hostel" required/>
        <datalist id="hostel">
            <option>RJB</option>
            <option >RKB</option>
            <option >SB</option>
            <option>rajiv</option>
            <option>coutley</option>


        </datalist>
        </td>
    
    </tr>
    <tr >
        <td>enter mo. num</td><td><input type="integer" name="mob_num" required/></td>
    </tr>

    <tr>
            <td align="right">username<br>(enroll. no)</td>
            <td><input type="integer" name="username" required/></td>

    </tr>
    <tr>c<td>enter a strong password !!</td>
    <td><input type="password" name="password" required/></td>
    </tr>
    <tr>
            <td colspan="2" align="center"><input type="submit" name="reg_user" value="register now !!"></td>
    </tr>
   


</table>
</form>

</div>
</body>
</html>

