<?php
$conn = mysqli_connect('localhost', 'root', '', 'home');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$action = $_GET['action'] ?? '';
$del_id = $_GET['id'] ?? '';
$end = $_GET['end'] ?? '';

if ($action == 'delete' && !empty($del_id) && ($end == 'c' || $end == 'f')) {
    if ($end == 'c') {
        $table = 'coding';
    } elseif ($end == 'f') {
        $table = 'frontend';
    }

    
    $delete_query = "DELETE FROM $table WHERE id=$del_id";
    $delete = mysqli_query($conn, $delete_query);

    if ($delete) {
        
        $renumber_query = "SET @count = 0;";
        mysqli_query($conn, $renumber_query);
        $update_query = "UPDATE $table SET id = @count:= @count + 1;";
        mysqli_query($conn, $update_query);

        
        header("location: welcome.php?deletion=success");
        exit();
    } else {
        echo "Error deleting data: " . mysqli_error($conn);
        exit();
    }
} else {
    echo "Invalid parameters for deletion.";
    exit();
}

mysqli_close($conn);
?>
