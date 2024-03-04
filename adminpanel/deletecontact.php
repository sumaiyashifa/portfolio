<?php
$conn = mysqli_connect('localhost', 'root', '', 'home');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$del_id =  $_REQUEST['id'];

$delete_query = "DELETE FROM contact where id=$del_id";

$delete =  mysqli_query($conn, $delete_query);
//confirm deletion
if ($delete) {
    header("location: welcome.php?deletion=success");
} else {
    echo "Error deleting data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>