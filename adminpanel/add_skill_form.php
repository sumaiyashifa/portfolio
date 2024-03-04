
<!DOCTYPE html>
<html>
<head>
<title>Add New Skill</title>
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
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid black;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
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
    <h2>Add New Skill</h2>
    <form action="add.php" method="post">
        <label for="table_type">Skill Type:</label>
        <select id="table_type" name="table_type" required>
            <option value="coding">Coding</option>
            <option value="frontend">Frontend</option>
        </select><br><br>

        <label for="skill_name">Skill Name:</label>
        <input type="text" id="skill_name" name="skill_name" required><br><br>
        
        <label for="skill_level">Proficiency Level:</label>
        <input type="text" id="skill_level" name="skill_level" required><br><br>
        
        <input type="submit" value="Add Skill">
    </form>
</body>
</html>
