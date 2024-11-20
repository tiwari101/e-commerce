<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "final";


$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    echo "Connection failed!";
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['Name']) && isset($_POST['Password'])) {
        $Name = $_POST['Name'];
        $Password = $_POST['Password'];

        
        $Name = mysqli_real_escape_string($conn, $Name);
        $Password = mysqli_real_escape_string($conn, $Password);

       
        $sql = "SELECT * FROM `sign up` WHERE `Name` = '$Name' AND `Password` = '$Password'";
        $result = mysqli_query($conn, $sql);

       
        if (mysqli_num_rows($result) > 0) {
           
            header('Location: index.html'); 
            exit;
        } else {
            echo "Invalid username or password!";
        }
    } else {
        echo "Please enter both username and password!";
    }
} else {
    echo "Form not submitted correctly!";
}
?>
