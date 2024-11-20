<?php

$data = file_get_contents("php://input");
$cartData = json_decode($data, true);
if (isset($cartData['items']) && isset($cartData['total'])) {
     $response = [
        'success' => true,
        'message' => 'Checkout processed successfully.'
    ];
} else {
      $response = [
        'success' => false,
        'message' => 'Invalid data received.'
    ];
}
header('Content-Type: application/json');
echo json_encode($response);
?>




<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default username for MySQL in XAMPP
$password = ""; // Default password is empty for MySQL in XAMPP
$dbname = "shop"; // The database name you created earlier

// Create connection
$connn = new mysqli($servername, $username, $password, $dbname);


if ($connn->connect_error) {
    die("Connection failed: " . $connn->connect_error);
}


    $checkoutData = $_POST['checkoutData'];
   
    $sqll =  "INSERT INTO `checkout`(`checkout`)  VALUES ('$checkoutData')";
 
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
