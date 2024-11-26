<?php
// Creating Connection With Database
$conn = mysqli_connect("localhost","u330288273_email","Qwerty*8","u330288273_qualtiywebs");
if(isset($_POST['subscribe'])){
    $query = "INSERT INTO `email_subscribe`(`email`) VALUES ('$_POST[EMAIL]')";
    try
    {
        $fire = mysqli_query($conn,$query);
        if($fire){
            echo "<script>
            alert('Thank You For Subscribing To Our Mails');
            window.location.href='index.html';
            </script>";
        }
    }
    catch(Exception $e){
        echo "<script>
        alert('Seems like You Already Subscribed To Our Mail');
        window.location.href='index.html';
        
        </script>";
    }
    echo "<script>
        alert('Seems like You Already Subscribed To Our Mail');
        window.location.href='index.html';
        
        </script>";
}
?>