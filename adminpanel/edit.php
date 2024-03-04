

<?php 
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the ID of the record to update
    $update_id = isset($_POST['id']) ? $_POST['id'] : '';
    $update_table = isset($_POST['end']) ? $_POST['end'] : '';

    // Retrieve form data
    $skillname = trim($_POST['skillname']);
    $level = $_POST['level'];

    // Database connection details
    $dsn = "mysql:host=localhost;dbname=home;charset=utf8mb4";
    $username = "root";
    $password = "";

    try {
        // Create a PDO instance
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQL query to update record
        if($update_table == 'c'){
            $sql = "UPDATE coding 
                    SET 
                    skill_name = :skill_name,
                    skill_level = :skill_level
                    WHERE
                    id = :id";
        } else {
            $sql = "UPDATE frontend 
                    SET 
                    skill_name = :skill_name,
                    skill_level = :skill_level
                    WHERE
                    id = :id";
        }

        // Prepare the SQL statement
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':id', $update_id, PDO::PARAM_INT);
        $stmt->bindParam(':skill_name', $skillname, PDO::PARAM_STR);
        $stmt->bindParam(':skill_level', $level, PDO::PARAM_STR);

        // Execute the SQL statement
        $stmt->execute();

        // Check if the update was successful
        if ($stmt->rowCount() > 0) {
            header("Location: welcome.php");
            exit();
        } else {
            echo "<h5>Update failed.</h5>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>

    <div class="container">
        <h2>EDIT SKILL</h2>

        <!-- Form to edit skill -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

            <!-- Hidden input field to capture ID -->
            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
            <input type="hidden" name="end" value="<?php echo isset($_GET['end']) ? $_GET['end'] : ''; ?>">

            <input type="text" name="skillname" placeholder="Skill Name" required>
            <input type="text" name="level" placeholder="level" required>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</body>
</html>
