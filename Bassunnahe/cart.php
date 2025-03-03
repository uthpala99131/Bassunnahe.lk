<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        /* styles.css */
body{
  text-align: center;
  height: 100vh;
  font-size: 20px;
  background: whitesmoke;
}
.labor-cart {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid ;
}

.cart {
  text-align: center;
  margin-bottom: 20px;
}

.scroll-bar {
  overflow-y: auto;
  max-height: 300px;
}

.box {
  display: flex;
  align-items: center;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.box img {
  width: 50px;
  margin-right: 10px;
}

.content {
  flex: 1;
}

.btn {
  display: block;
  width: 100%;
  text-align: center;
  background-color: #007bff;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 5px;
  text-decoration: none;
}

.btn:hover {
  background-color: #0056b3;
}

.price {
  font-weight: bold;


}

/* You need to include FontAwesome CSS to see the icons properly */

    </style>
</head>
<body>
<?php

// Check if data is sent through GET method
if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['profession']) && isset($_GET['location'])) {
    // Retrieve data from GET parameters
    $id = $_GET['id'];
    $name = $_GET['name'];
    $profession = $_GET['profession'];
    $location = $_GET['location'];

    // Define a simple linked list node class
    class Node {
        public $data;
        public $next;

        public function __construct($data) {
            $this->data = $data;
            $this->next = null;
        }
    }

    // Function to add a node to the end of the linked list
    function addNode($head, $data) {
        $newNode = new Node($data);
        if ($head == null) {
            $head = $newNode;
        } else {
            $current = $head;
            while ($current->next != null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
        return $head;
    }
    $head = null;
    // Add new item to the linked list
    $head = addNode($head, array('id' => $id, 'name' => $name, 'profession' => $profession, 'location' => $location));

    echo "<div class='item-added'>";
    echo "<p>Item added to cart:</p>";
    echo "<p>Name: $name</p>";
    echo "<p>Profession: $profession</p>";
    
    echo "</div>";
    echo "<a href='payment.html'>order<a></br>";
    echo "<a href='profile.php'>back to profile<a>";
} else {
    echo "Invalid request";
}
?>


</body>
</html>
