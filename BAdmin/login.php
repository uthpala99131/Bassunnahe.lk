<?php

include_once 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM admin_account WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        
        header("Location: Admin.php");
        exit(); 
    } else {
        
        echo '<script>alert("Incorrect username or password!");</script>';
        echo '<script>window.location.href = "index.html";</script>';
        exit();
    }
}

$conn->close();
?>
