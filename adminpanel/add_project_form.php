
<!DOCTYPE html>
<html>
<head>
<title>Add New Project</title>
   <style>

    
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2ab;
    background-image: url('cc.jpg');
    background-size: cover;
}

h2 {
    color: white;
    text-align: center;
}

form {
    width: 300px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.8);
}

label {
    display: block;
    margin-bottom: 10px;
    color: #666;
}

input[type="text"],
select {
    width: 100%%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid black;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    padding: 13px;
    background-color: #5d6062;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: blue;
}
   </style>
</head>
<body>
    <h2>Add New Project</h2>
    <form action="add_project.php" method="post">
    <label for="Project_link">Project Link:</label>
    <input type="text" id="Project_link" name="Project_link" required><br><br>
    
    <label for="Description">Description:</label> 
    <input type="text" id="Description" name="Description" required><br><br>
    
    <label for="Image">Image:</label> 
    <input type="text" id="Image" name="Image" required><br><br>
    
    <input type="submit" value="Add Project">
</form>

</body>
</html>
