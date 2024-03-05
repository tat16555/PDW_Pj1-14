<?php
// update.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $param = Array(
        'id' => $_POST["id"],
        'firstname' => $_POST["firstname"],
        'lastname' => $_POST["lastname"],
        'email' => $_POST["email"],
    );
    require_once 'connect.php';
    $sql = "UPDATE students SET firstname=:firstname, lastname=:lastname, email=:email WHERE id=:id";
    $statement = $conn->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->bindParam(':firstname', $firstname);
    $statement->bindParam(':lastname', $lastname);
    $statement->bindParam(':email', $email);
    if ($statement->execute($param)) {
        header('refresh:1;url=index.php');
        exit(); 
    } else {
        echo "อัพเดทไม่สำเร็จ: <a href='index.php'>ข้อมูลสมาชิก</a>";
    }
    $conn = null; 
}
?>
