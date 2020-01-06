<?php
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
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{
       /* box-sizing: border-box;*/
  }

.row::after {
  content: "";
  clear: both;
  display: block;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  [class*="col-"] {
    width: 100%;
  }
}
.dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
  }
  
  .dropup {
    position: relative;
    display: inline-block;
  }
  
  .dropup-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    bottom: 50px;
    z-index: 1;
  }
  
  .dropup-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropup-content a:hover {background-color: #ccc}
  
  .dropup:hover .dropup-content {
    display: block;
  }
  
  .dropup:hover .dropbtn {
    background-color: #2980B9;
  }
  .fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
</style>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-image:url('images.jpg')">


<?php if(isset($_SESSION['username'])) : ?>
<div class="header">
  <h1><b>WELCOME to the DASHBOARD !!!</b></h1>
</div>

<div class="row">
  <div class="col-3 menu">
    <ul>
    <li>profile</li>
    <li>change password</li>
    <li><a href="https://nptel.ac.in/course.html">NPTEL</a></li>
    <li><a href="admindash.php?logout=1">Logout!</a></li>
    </ul>
  </div>

  <div class="col-6">
    <h1>Hello <?php  echo $_SESSION['name']; ?></h1>
    <p><b>No one can be perfect all the time, and progress is the only way that you can improve. Try and progress with your work and keep going even if you make mistakes.</b></p>

  </div>
  <div class="col-3 right">
    <div class="aside">
      <h2>What?</h2>
      <p>This port helps you in your study</p>
      
      <h2>How?</h2>
      <p>You cna store all study material here!!</p>
      <div class="dropup">
  <button class="dropbtn"><h2>Assingments</h2></button>
  <div class="dropup-content">
    <a href="subject1.php">SUNJECT 1</a>
    <a href="#">SUBJECT 2</a>
    <a href="#">SUBJECT 3</a>
    <a href="#">SUBJECT 4</a>
    <a href="#">SUBJECT 5</a>
    <a href="#">SUBJECT 6</a>
    <a href="#">SUBJECT 7</a>

  </div>
</div>
    </div>
  </div>
</div>

<div class="footer">
  <p>THIS project is made by  -sarvesh raut (sarveshraut123@gmail.com)</p>
  <P>                        SOCIAL-MEDIA                           </P>
  <p><a href="https://mtouch.facebook" class="fa fa-facebook">FACEBOOK</a>
</p>

</div>
<?php endif; ?>
</body>
</html>
