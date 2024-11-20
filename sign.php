<?php
$server ="localhost";
$username = "root";
$password = "";
$dbname = "final";

$conn = mysqli_connect($server, $username , $password , $dbname );

if(!$conn){
    echo "not connected";

}
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone =$_POST['Phone'];
$Password =$_POST['Password'];

$sql = "INSERT INTO `sign up`(`Name`, `Email`, `Phone`, `Password`) 
        VALUES ('$Name', '$Email', '$Phone', '$Password')";


$result = mysqli_query($conn , $sql);

 if ($result){
    header('Location: login.html');
    exit;
}
else{
    echo "not stored";
}


?>