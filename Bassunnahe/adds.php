<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'DBconnection.php';

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO `add` (firstName, lastName, userName, mobileNo, profession, location, profileImage) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $firstName, $lastName, $userName, $mobileNo, $profession, $location, $profileImage);

    // Set parameters and execute
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $mobileNo = $_POST['mobileNo'];
    $profession = $_POST['profession'];
    $location = $_POST['location'];
    $profileImage = file_get_contents($_FILES['profileImage']['tmp_name']); // Get the contents of the image file

    if ($stmt->execute()) {
        header("Location: loghome.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
