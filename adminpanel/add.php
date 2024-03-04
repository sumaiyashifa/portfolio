<?php
$conn = mysqli_connect('localhost', 'root', '', 'home');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$skill_name = $_POST['skill_name'] ?? '';
$skill_level = $_POST['skill_level'] ?? '';
$table_type = $_POST['table_type'] ?? '';

if (!empty($skill_name) && !empty($skill_level) && !empty($table_type)) {
    $table = mysqli_real_escape_string($conn, $table_type);
    $insert_query = "INSERT INTO $table (skill_name, skill_level) VALUES ('$skill_name', '$skill_level')";
    
    if (mysqli_query($conn, $insert_query)) {
        $last_id = mysqli_insert_id($conn);
        
        $update_query = "SET @count = 0;";
        mysqli_query($conn, $update_query);
        
        $update_query = "UPDATE $table SET id = @count:= @count + 1;";
        mysqli_query($conn, $update_query);

       
        header("location: welcome.php?addition=success");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Skill name, proficiency level, and table type are required!";
}

mysqli_close($conn);
?>
