<?php
session_start();
if (isset($_SESSION["name"]) && $_SESSION["pass"]) {
    $nameSession = $_SESSION["name"];
    $passSession = $_SESSION["pass"];
}
if (isset($_COOKIE["name"]) && $_COOKIE["pass"]) {
    $nameCookie = $_COOKIE["name"];
    $passCookie = $_COOKIE["pass"];
}
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {

    session_unset();
    session_destroy();
}
$_SESSION['LAST_ACTIVITY'] = time();
?>
<?php 
    include("connection.php");
    include("login.php")
    ?>
    
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        
        <div id="form">
            <h1>Login Form</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>Username: </label>
                <input type="text" id="user" name="user" <?= isset($nameCookie) ? 'value="' . $nameCookie . '"' : 'placeholder="Username"'; ?> autocomplete="off"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass"  <?= isset($passCookie) ? 'value="' . $passCookie . '"' : 'placeholder="Password"'; ?> autocomplete="new-password"></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>
