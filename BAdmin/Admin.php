<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bass Admin</title>

	<link rel="stylesheet" href="Admin.css">
    <link rel="stylesheet" href="custom.css">
    
    <script>
        function confirmDeletion(event) {
            if (!confirm('Are you sure you want to delete this data?')) {
                event.preventDefault();
            }
        }
    </script>

</head>
<body>
    <header>
    <a href="#" class="logo"><img src="./image/LOGO1Y.png" alt="" /></a>
        <h1>BASSUNAHE.LK</h1>
        <h2>Genaral <span>Details</span></h2>
       
    </header>


    <div class="container">
        <div class="dashboard-section">
            <h2>REGISTERED CONTACTS</h2>
            
            <?php
            
            include 'conn.php';

            
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Id</th><th>first name</th><th>last name</th><th>user name</th><th>email</th><th>contact</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>{$row['id']}</td><td>{$row['firstName']}</td><td>{$row['lastName']}</td><td>{$row['userName']}</td><td>{$row['email']}</td><td>{$row['mobileNo']}</td>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
        <form action="custom.php" method="post" onsubmit="confirmDeletion(event)">
                    <label for="id">ID to delete:</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="del_reg">Delete Data</button>
                    </div>
                </form>
<br><br>



<div class="dashboard-section">
            <h2>ADDVERTIESTMENT</h2>
            
            <?php
            
            include 'conn.php';

            
            $sql = "SELECT * FROM `add`";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Id</th><th>First Name</th><th>Last Name</th><th>User Name</th><th>contact</th><th>Profession</th><th>Location</th><th>Price</th><th>Date</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>{$row['addNo']}</td><td>{$row['firstName']}</td><td>{$row['lastName']}</td><td>{$row['userName']}</td><td>{$row['mobileNo']}</td><td>{$row['profession']}</td><td>{$row['location']}</td><td>{$row['price']}</td><td>{$row['date']}</td>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
        <form action="custom.php" method="post">
                    <label for="id">ID to delete:</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="del_add">Delete Data</button>
                    </div>
                </form>
<br><br>







        <div class="dashboard-section">
            <h2>CONTACT US MESSAGES</h2>

            <?php
            // Include the database connection file
           
            include 'conn.php';

            // SQL query to retrieve data from the table
            $sql = "SELECT id, name, email, phone, description FROM contact_messages";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>id</th><th>name</th><th>tel</th><th>email</th><th>description</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['phone']}</td><td>{$row['email']}</td><td>{$row['description']}</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
        <form action="custom.php" method="post">
                    <label for="id">ID to delete:</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="del_cont">Delete Data</button>
                    </div>
                </form>
  <br><br><br>



  
</div>
    
<footer>
    <p>&copy; copyright <strong><span>Bassunnahe.lk</span></a></strong>. All Right reserved</p>
</footer>
</body>
</html>
