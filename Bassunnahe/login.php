<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'DBconnection.php';
    $username = $_POST['username'];
    $password = $_POST['password']; 
    
    $sql = "SELECT * FROM users WHERE userName='$username' AND password='$password'";
    $result = $conn->query($sql);   //check correction

    if ($result->num_rows > 0) {
        // User exists, set session and redirect
        $row = $result->fetch_assoc();
        
        $_SESSION['username'] = $row["userName"];
        $_SESSION['firstname'] = $row["firstName"];
        $_SESSION['lastname'] = $row["lastName"];
        $_SESSION['email'] = $row['email'];
        $_SESSION['tel'] = $row['mobileNo'];
        $_SESSION['prof']=$row['profession'];
        $_SESSION['loc']=$row['location'];
        $_SESSION['img']=$row['profileImage'];
        header("Location: loghome.php");
    } else {
       
        echo "<script>alert('Invalid username or password');</script>";
        echo "<script>window.location.href='login.html';</script>";
    }

    $conn->close();
}
?>
