<?php
// update.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a form with input fields named 'firstname', 'lastname', 'email', and a hidden field 'id'
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];


    $sql = "UPDATE students SET firstname=?, lastname=?, email=? WHERE id=?";
    require_once 'connect.php';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $firstname, $lastname, $email, $id); // Adjust types accordingly
    header("refresh: 1; url= index.php");
    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request";
}
?>
