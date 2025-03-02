<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'DBconnection.php';

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, userName, email, mobileNo, profession, location, password, profileImage) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $firstName, $lastName, $userName, $email, $mobileNo, $profession, $location, $password, $profileImage);

    // Set parameters and execute
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $mobileNo = $_POST['mobileNo'];
    $profession = $_POST['profession'];
    $location = $_POST['location'];
    $password = $_POST['password'];
    $profileImage = file_get_contents($_FILES['profileImage']['tmp_name']); // Get the contents of the image file

    if ($stmt->execute()) {
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
