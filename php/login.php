<?php
include('connect.php');

$username= $_POST['username'];
$password = $_POST['password'];


$result = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' and password='$password' ");
$userData = mysqli_fetch_array($result, MYSQL_ASSOC);

if (mysqli_num_rows($result) >0) {
    echo("login Successfully!");
    session_start();
    $_SESSION['name'] = "userAdmin";
    $_SESSION['isLogged'] = true;
    session_write_close();
    header( 'Location:../question.php' ) ;
}else {

    header( 'Location:../index.php?error=login_fail' ) ;

}

$conn->close();
?>