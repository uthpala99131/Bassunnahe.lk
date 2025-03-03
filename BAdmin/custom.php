<?php 
include_once 'conn.php';


if (isset($_POST['del_reg'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: Admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['del_add'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM `add` WHERE addNo = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: Admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
   
    if (isset($_POST['del_cont'])) {
        $id = $_POST['id'];
    
        $sql = "DELETE FROM contact_messages WHERE id = $id";
    
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            header("Location: Admin.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

}




$conn->close();
?>
