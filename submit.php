<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default username for MySQL in XAMPP
$password = ""; // Default password is empty for MySQL in XAMPP
$dbname = "hardware_store"; // The database name you created earlier

// Create connection
$connn = new mysqli($servername, $username, $password, $dbname);


if ($connn->connect_error) {
    die("Connection failed: " . $connn->connect_error);
}


    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare and bind
    $sqll =  "INSERT INTO `contact_form`(`name`, `email`, `subject`, `message`)  VALUES ('$name', '$email', '$subject', '$message')";
 
    $isthatconnect= mysqli_query($connn , $sqll);
    if ($isthatconnect) {
        // Redirect to a success page or back to the contact page
        header("Location: contact.html?status=success");
    } else {
        echo "Error: " . error;
    }

    // Close the statement and connection
 
    $conn->close();

?>
