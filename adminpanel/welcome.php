
<?php
include 'connection.php';
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://kit.fontawesome.com/5ed9f8e5e4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" class="stylesheet">

    <link rel="stylesheet" href="style1.css"/>
</head>
<body>
    <!-- <h1>Login Successful</h1> -->
    <div class="sidebar" id="menu">
        <div class="logo">
            <img src="sks.jpg" alt="">
            <h2>AdminPanel</h2>
        </div>
        <div class="items">
            <ul>
                <li class="menuitem"><a href="#" data-section="home"><i class="fa-solid fa-house">  Home</i></a></li>
                <li class="menuitem"><a href="#" data-section="skills"><i class="fa-solid fa-book-open-reader">  Skills</i></a></li>
                <li class="menuitem"><a href="#" data-section="projects"><i class="fa-solid fa-folder-open">  Projects</i></a></li>
                <li class="menuitem"><a href="#" data-section="contact"><i class="fa-solid fa-address-book">  Contact</i></a></li>
            </ul>
            <div class="logout-btn">
    <a href="index.php">Logout</a>
</div>

        </div>
    </div>
    <div class="mainbody">

    <section class="skills sections ">
    <h2>Skills</h2>
    <table>
        <thead>
            <tr>
                <th>NO.</th>
                <th>Skill Name</th>
                <th>Proficiency</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $connection = mysqli_connect("localhost", "root", "", "home");
            
            // Initialize counts for each table
            $count_coding = 1;
            $count_frontend = 1;

            // Display coding skills
            $statementSkill = "SELECT * FROM `coding`";
            $fetchSkill = mysqli_query($connection, $statementSkill);
            while ($rowSkill = mysqli_fetch_assoc($fetchSkill)) {
                ?>
                <tr>
                    <td><?= $count_coding++ ?></td>
                    <td><?= $rowSkill['skill_name'] ?></td>
                    <td><?= $rowSkill['skill_level'] ?></td>
                    <td><a href="edit.php?id=<?= $rowSkill['id'] ?>&end=c">edit</a></td>
                    <td><a href="delete.php?action=delete&id=<?= $rowSkill['id'] ?>&end=c">delete</a></td>
                </tr>
                <?php
            }

            // Display frontend skills
            $statementSkill = "SELECT * FROM `frontend`";
            $fetchSkill = mysqli_query($connection, $statementSkill);
            while ($rowSkill = mysqli_fetch_assoc($fetchSkill)) {
                ?>
                <tr>
                    <td><?= $count_frontend++ ?></td>
                    <td><?= $rowSkill['skill_name'] ?></td>
                    <td><?= $rowSkill['skill_level'] ?></td>
                    <td><a href="edit.php?end='f'&id=<?= $rowSkill['id'] ?>">edit</a></td>
                    <td><a href="delete.php?action=delete&id=<?= $rowSkill['id'] ?>&end=f">delete</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <form action="add_skill_form.php" method="get">
    <input type="submit" name="submit" class="update-home" value="ADD SKILL">
    </form>
</section>

    <section class="home sections active">
        <?php 
        $statementhome="SELECT * FROM `hometable`WHERE id=1"; 
        $fetchhome=mysqli_query($connection,$statementhome);  
        $data=mysqli_fetch_assoc($fetchhome);
        ?>
    <div class="home nav-section ">
                <h2>HOME</h2>
                <form action="welcome.php" method="POST" id="update-form">
                    <table>
                        <tbody>
                            <tr>
                                <th>Picture</th>
                                <td><input class="home-input" name="picture" type="text"
                                        value="<?= $data['picture'] ?>"></td>
                            </tr>
                            <tr>
                                <th>H1</th>
                                <td><input type="text" name="h1" class="home-input" value="<?= $data['h1'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td><input type="text" name="name" class="home-input"
                                        value="<?= $data['name'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><input type="text" name="description" class="home-input"
                                        value="<?= $data['description'] ?>"></td>
                            </tr>
                            <tr>
                                
                                <th>Email</th>
                                <td><input type="text" name="email" class="home-input"
                                        value="<?= $data['email'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Github</th>
                                <td><input type="text" name="github" class="home-input"
                                        value="<?= $data['github'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Code</th>
                                <td><input type="text" name="code" class="home-input"
                                        value="<?= $data['code'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Linkedin</th>
                                <td><input type="text" name="linkdin" class="home-input"
                                        value="<?= $data['linkdin'] ?>"></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <input type="submit" name="submit" class="update-home" value="UPDATE">
                </form>

                <?php
                // Assuming you have established a database connection
                
                if (isset($_POST['submit'])) {
                    $picture = $_POST['picture'];
                    $h1 = $_POST['h1'];
                    $name = $_POST['name'];
                    $description = $_POST['description'];
                    $email = $_POST['email'];
                    $github = $_POST['github'];
                    $code = $_POST['code'];
                    $linkdin = $_POST['linkdin'];
                   
// Prepare SQL statement
                    $sql = "UPDATE hometable 
                    SET 
                    picture = :picture,
                    h1=:h1,
                    name=:name,
                    email= :email,
                    github= :github,
                    description=:description,
                    code=:code,
                    linkdin=:linkdin
                    WHERE
                    id = 1";
    
                    $dsn = "mysql:host=localhost;dbname=home;charset=utf8mb4";
                    $username = "root";
                    $password = "";
                    $pdo = new PDO($dsn, $username, $password);
                    // Prepare and execute the statement
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([
                        'picture' => $picture,
                        'email' => $email,
                        'h1'=>$h1,
                        'name'=>$name,
                        'github'=>$github,
                        'description'=>$description,
                        'code'=>$code,
                        'linkdin'=>$linkdin
                        
                        
                    ]);

                    // Check if the update was successful
                    if ($stmt->rowCount() > 0) {
                        header("Location: " . $_SERVER['PHP_SELF']);
                        ?>
                        <h5>Update successful.</h5>
                        <?php
                    } else {
                        ?>
                        <h5>Update failed.</h5>
                        <?php
                    }

                }
                ?>
            </div>
    </section>

    <section class="contact sections">
        
                <h2>MESSAGES</h2>
                <table>
                    <thead>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                        $connection=mysqli_connect("localhost","root","","home");
                         $statementcontact="SELECT * FROM `contact`"; 
                         $fetchcontact=mysqli_query($connection,$statementcontact);  
                        while ($datacontact = mysqli_fetch_assoc($fetchcontact)) {
                            ?>
                            <tr>
                                <td class="center">
                                    <?= $datacontact['time'] ?>
                                </td>
                                <td class="center">
                                    <?= $datacontact['name'] ?>
                                </td>
                                <td class="center">
                                    <?= $datacontact['email'] ?>
                                </td>
                                <td class="center">
                                    <?= $datacontact['msg'] ?>
                                </td>

                                <td><a class="delete-msg" href="deletecontact.php?id=<?= $datacontact['id'] ?>">Delete</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>

                  
                </table>
                    </section>


</div>
 <section id="interface">
<div class="nav">
<div class="n1">
    <div class="search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="search">
    </div>
</div>
<div class="profile">
    <i class="fa-solid fa-bell"></i>
    <img src="profile.png" alt="">

</div>

</div>
 </section>
   
<script src="admin.js"></script>

</body>
</html>
<?php
ob_end_flush();
?>