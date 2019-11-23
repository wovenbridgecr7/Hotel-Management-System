<?php
session_start();
include 'connection.php';
$username = $_POST['username'];
// sql to delete a record
$sql = "DELETE FROM userinfo WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>