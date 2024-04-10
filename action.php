
<?php

$connect = mysqli_connect("localhost","root","","form");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $myquary = "INSERT INTO users (email, password) VALUES('$email','$password')";
    mysqli_query($connect, $myquary);
    header('location: success.php');
}
?>

