
<?php
$servername = "localhost:330";
$username = "root";
$password = "";
$dbname = "aaaa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uname = $_POST['uname'];
$pass = $_POST['pass1'];

$sql = "SELECT * FROM gggg WHERE uname='$uname' AND pass1='$pass'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    echo "Welcome, $uname!";
} else {
    echo "Invalid username or password";
    echo  $pass;
}

$conn->close();
?>
