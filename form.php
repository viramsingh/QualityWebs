<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "chatbot";

// Create connection
$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$connect) {
  die("Connection failed!! ");
}
else{
   if(isset($_POST['submit']))
   {
    $topic =$_POST['Sub'];
    $name =$_POST['Name'];
    $number =$_POST['Cno'];
    $sql="INSERT INTO `form`(`topic`, `name`, `number`) VALUES ('$topic','$name','$number')";
    $result=mysqli_query($connect, $sql);
    if ($result==1){
        echo"<script>
        // alert('Thank You For your Response !!');
        window.location.href='services.html#init';

        </script>";
    }
   }
   elseif(isset($_POST['prot'])){
    $topic =$_POST['Sub'];
    $name =$_POST['Name'];
    $number =$_POST['Cno'];
    $sql="INSERT INTO `form`(`topic`, `name`, `number`) VALUES ('$topic','$name','$number')";
    $result=mysqli_query($connect, $sql);
    if ($result==1){
        echo"<script>
        // alert('Thank You For your Response !!');
        window.location.href='portfolio.html#init';
        </script>";
    }
   }
  elseif(isset($_POST['index'])){
    $topic =$_POST['Sub'];
    $name =$_POST['Name'];
    $number =$_POST['Cno'];
    $sql="INSERT INTO `form`(`topic`, `name`, `number`) VALUES ('$topic','$name','$number')";
    $result=mysqli_query($connect, $sql);
    if ($result==1){
        echo"<script>
        // alert('Thank You For your Response !!');
        window.location.href='index.html#init';
        </script>";
    }
  }
  elseif(isset($_POST['about'])){
    $topic =$_POST['Sub'];
    $name =$_POST['Name'];
    $number =$_POST['Cno'];
    $sql="INSERT INTO `form`(`topic`, `name`, `number`) VALUES ('$topic','$name','$number')";
    $result=mysqli_query($connect, $sql);
    if ($result==1){
        echo"<script>
        // alert('Thank You For your Response !!');
        window.location.href='about-us.html#init';
        </script>";
    }
  }
  elseif(isset($_POST['blog'])){
    $topic =$_POST['Sub'];
    $name =$_POST['Name'];
    $number =$_POST['Cno'];
    $sql="INSERT INTO `form`(`topic`, `name`, `number`) VALUES ('$topic','$name','$number')";
    $result=mysqli_query($connect, $sql);
    if ($result==1){
        echo"<script>
        // alert('Thank You For your Response !!');
        window.location.href='blog.html#init';
        </script>";
    }
  }
  elseif(isset($_POST['contact'])){
    $topic =$_POST['Sub'];
    $name =$_POST['Name'];
    $number =$_POST['Cno'];
    $sql="INSERT INTO `form`(`topic`, `name`, `number`) VALUES ('$topic','$name','$number')";
    $result=mysqli_query($connect, $sql);
    if ($result==1){
        echo"<script>
        // alert('Thank You For your Response !!');
        window.location.href='contact-us.html#init';
        </script>";
    }
  }

}

?>