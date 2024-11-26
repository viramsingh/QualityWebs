<?php
// Writting Code for Connection
$conn = mysqli_connect("localhost","u330288273_email","Qwerty*8","u330288273_qualtiywebs");
$query = "INSERT INTO `contact_details`(`name`, `c_number`, `subject`, `message`) VALUES ('$_POST[UserName]','$_POST[Usernu]','$_POST[subject]','$_POST[message]')";
try{
    $run = mysqli_query($conn,$query);
    if($run){
        echo "<script>
        alert('Thank You For Sending Message To Us!! Our Team Will Contact You Very Soon');
        window.location.href='contact-us.html';
        </script>";
    }
}
catch (Exception $e){
    echo "<script>
    alert('Oops An Error Occur Please Call Our Customer Care To Let Us know About your Concern!!');
    window.location.href='contact-us.html';
    </script>";
}
?>