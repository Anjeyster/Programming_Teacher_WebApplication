<?php
include('connect.php');
$id = $_GET['id'];
$stat = 'YES';

$sql = "UPDATE participant SET participate = '$stat' WHERE  id='$id'";

if ($conn->query($sql) === TRUE) {
    header('Location: ' .'../index.php?job=done');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();

?>