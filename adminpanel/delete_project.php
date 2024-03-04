<?php

if(isset($_GET['action']) && isset($_GET['id'])) {
   
    $conn = mysqli_connect('localhost', 'root', '', 'home');

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

   
    $action = $_GET['action'];
    $project_id = $_GET['id'];

   
    if ($action === 'delete') {
        
        $delete_query = "DELETE FROM project WHERE id = $project_id";

        if (mysqli_query($conn, $delete_query)) {
          
            header("location: welcome.php?deletion=success");
            exit();
        } else {
           
            echo "Error deleting project: " . mysqli_error($conn);
            exit();
        }
    } else {
     
        echo "Invalid action.";
        exit();
    }

   
    mysqli_close($conn);
} else {
   
    echo "Invalid parameters for deletion.";
    exit();
}
?>
