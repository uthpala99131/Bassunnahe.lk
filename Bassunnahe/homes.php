<?php
include_once 'DBconnection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-divice-width, initial-scale=1.0">
        <title>Basssunnahe home page</title>
        <link rel="stylesheet" href="./Styles/profilestyle.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        
        

    </head>
    <body>

<!--header start-->
<header class="header">
      
    <a href="home.php" class="logo"> <span>B</span>assunnahe<span>.lk</span></a>
  
    <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="home.php/#contact">CONTACT</a>
            <a href="#about">ABOUT US</a>
            <a href="#blogs">BLOGS</a>
            <a href="#top-cards">CATEGORY</a>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">LOCATION</a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">--Select--</a></li>
                        <li><a class="dropdown-item" href="#">colombo</a></li>
                        <li><a class="dropdown-item" href="#">kandy</a></li>
                        <li><a class="dropdown-item" href="#">Galle</a></li>
                        <li><a class="dropdown-item" href="#">Kurunegala</a></li>
                        <li><a class="dropdown-item" href="#">Anuradapura</a></li>
                        <li><a class="dropdown-item" href="#">Kegalle</a></li>
                        <li><a class="dropdown-item" href="#">colombo</a></li>
                        <li><a class="dropdown-item" href="#">kandy</a></li>
                        <li><a class="dropdown-item" href="#">Galle</a></li>
                     
                      </ul>
    </nav>
    <div class="icons">  
    <a href="cart.php">
    <div class="fas fa-shopping-cart" id="cart-btn"></div>
    </a>                 
        </header>
  <!--header end-->
  
  

  <?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bassunnahe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user from the query parameter
$user = isset($_GET['user']) ? $_GET['user'] : '';

if ($user) {
    // Prepare the SQL query to fetch the ad related to the user
    $sql = "SELECT * FROM `add` WHERE `profession` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there is a result
    if ($result->num_rows > 0) {
        // Output the ad details
        while ($row = $result->fetch_assoc()) {
            echo '<div class="container">';
            echo '<div class="profile-box">';
            echo '<img src="imagess/icons/menuu.png" class="menu-icon">';
            echo '<img src="imagess/icons/sett.png" class="setting-icon">';
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['profileImage']).'" width="100" height="100"/>';
            echo '<h3>' . $row['firstName'] . ' ' . $row['lastName'] . '</h3>';
            echo '<p>' . $row['profession'] . '</p>';
            echo '<p>' . $row['location'] . '</p>';
            echo '<p>' . $row['price'] . '</p>';
            echo '<div class="social-media">';
            
            echo '</div>';
            // Add the "Add To Cart" button with a link to cart.php passing the user data
            echo '<div class="btn">';
            echo '<div class="x">';
            echo '<a  href="cart.php?id=' . $row['addNo'] . '&name=' . urlencode($row['firstName'] . ' ' . $row['lastName']) . '&profession=' . urlencode($row['profession']) . '&location=' . urlencode($row['location']) . '">Add To Cart</a>';
            echo '</div>';
            // echo '<a href="payment.html">For Hired<a>';
            echo '<div class="x">';
            echo '<a  href="payment.html">For Hired</a>';
            echo '</div>';
            echo '</div>';
           
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No ads found for " . htmlspecialchars($user);
    }

    $stmt->close();
} else {
    echo "No user specified.";
}

$conn->close();
?>










  
            <!--footer start-->
            <footer id="footer">
                
                <div class="social-links text-center">
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-instagram"></i>
                  <i class="fa-brands fa-youtube"></i>
                  <i class="fa-brands fa-whatsapp"></i>
                  <i class="fa-brands fa-telegram"></i>
                  <i class="fa-brands fa-linkedin"></i>
              
                </div>
                <div class="credits text-center">
                  Designed by <a href="#"><span>Group 5</span></a>
                </div>
                <div class="copyright text-center">
                  &copy; copyright <strong> <a href="#home"><span>Bassunnahe.lk</span></a></strong>. All Right reserved
                </div>
          </footer>
            <!--footer end-->
         




           
            
         
       </div>

       <script src="script.js"></script> <!--javascript file connect link-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>