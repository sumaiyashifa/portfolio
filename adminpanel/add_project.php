<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link= $_POST['Project_link']; 
    $sider= $_POST['Description']; 
    $image = $_POST['Image']; 

    $connection = mysqli_connect("localhost", "root", "", "home");

    $query = "INSERT INTO project (link, sider, image) VALUES ('$link', '$sider', '$image')"; 
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: welcome.php"); 
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
}

?>
