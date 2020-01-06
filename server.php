<?php 
include('dbcon.php');



if(isset($_POST['reg_user'])){
    $name = $_POST['name'];
    $mob_num = $_POST['mob_num'];
    $username = $_POST['username'];
    $pass = $_POST['password']; 
    $branch = $_POST['branch'];
    $hostel = $_POST['hostel'];
    $query="select username from student WHERE username='$username'" ;
    $query_run = mysqli_query($con,$query) ;
    if(mysqli_num_rows($query_run)>0)
    {
        echo '<script type="text/javascipt"> alert("useenrlrname already registerd , try another one !")</script>' ;
    }   
    $query= "insert into `student` values('$branch','$name','$username','$hostel','$mob_num','$pass')" ; 
    //  mysqli_query($con, "INSERT INTO `student` (`branch`, `name`, `hostel`, `monum`, `password`, `enrl`) VALUES ('$branch', '$name', '$hostel', '$mob_num', '$pass', '$enrl')");
   if (mysqli_query($con,$query))
    {
        echo '<script type="text/javascript"> alert("registered successfully ,go to loginpage !") ;</script>' ;
 
    }
    else
    {
        echo '<script type="text/javascript"> alert("Error , to register!") ;</script>' ;
    }
}


?>
