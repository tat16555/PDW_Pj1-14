<?php
session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $param = Array(
            'u_id' => $_POST["u_id"],
            'u_name' => $_POST["u_name"],
            'u_email' => $_POST["u_email"],
            'updated_at' => date("Y-m-d h:i:s"),
            'Status' => $_POST["Status"],
        );
        require_once '../../common/connect.php';
        $sql = "UPDATE users SET u_name=:u_name, u_email=:u_email, updated_at=:updated_at, Status=:Status WHERE u_id=:u_id";
        $statement = $conn->prepare($sql);
        $statement->bindParam(':u_name', $u_name);
        $statement->bindParam(':u_email', $u_email);
        $statement->bindParam(':updated_at', $updated_at);
        $statement->bindParam(':u_id', $u_id);

        if ($statement->execute($param)) {
            $_SESSION['success'] = "อัพเดทสำเร็จ";
            header("Location: index.php"); 
            exit();
        } else {
            $_SESSION['error'] = 'อัพเดทไม่สำเร็จ';
        }
    }
header("Location: index.php");
?>

?>
