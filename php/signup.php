<?php
include('connect.php');

$username= $_POST['username'];
$password = $_POST['password'];
$key = $_POST['key'];

$sharedKey = "fegfasuwDSweFs5241@1G";
//first check te key of user input
if($key == $sharedKey){
    $sql = "INSERT INTO users (username,password) VALUES ('$username','$password');";

    if ($conn->query($sql) === TRUE ){
        session_start();
        $_SESSION['name'] = "userAdmin";
        $_SESSION['isLogged'] = true;
        session_write_close();

        header('Location:../question.php' ) ;
    }else {
        header( 'Location:../signup.php?error=input' ) ;
    }
}else{
    header( 'Location:../signup.php?error=key' ) ;
}



$conn->close();
?>