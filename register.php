<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "aaaa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Process the registration form if it was submitted
    $uname = $_POST["uname"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];
    
    // Validate the data (add more validation as needed)
    $sql = "INSERT INTO gggg (uname , fname , lname , pass1 , pass2) VALUES ('$uname', '$fname' , '$lname' , '$pass1' , '$pass2')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
    <title>Form</title>
</head>

<body>
    <div id="main-container" class="centered-flex">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="watch3.mp4" type="video/mp4">
        </video>
        <div class="form-container">
            <div class="icon centered-flex"><i class="fa fa-user"></i></div>
            <div class="title">LOGIN</div>
            <form id="login-form" class="centered-flex" action="http://localhost/CIA_3_Project/Login_page/login.php " method="Post">
                <div class="msg"></div>
                <div class="field">
                    
                    <div class="input-data">
                        <input type="text" required id="uname" name="uname">
                        
                        <label>Username</label>
                     </div>
                     <i class="fa fa-user"></i>
                </div>
                <div class="field">
                    <div class="input-data">
                        <input type="password" required id="pass" name="pass">
                        
                        <label>Password</label>
                     </div>
                     <i class="fa fa-lock"></i>
                </div>
                <div class="action centered-flex">
                    <label for="remember" class="centered-flex">
                        <input type="checkbox" id="remember"> Remember me
                    </label>
                    <a href="#">Forget Password ?</a>
                </div>
                <div class="btn-container"><button  id="btn">Login</button></div>
                <div class="signup">Don't have an Account?<a href="file:///Applications/XAMPP/xamppfiles/htdocs/CIA_3_Project/register_pg.html"> Sign up</a></div>
            </form>
        </div>
    </div>
    <script src="register.js"></script>
</body>

</html>