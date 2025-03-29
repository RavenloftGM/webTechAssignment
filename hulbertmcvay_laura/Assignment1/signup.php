<?php
session_start();
require_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    if ($connection) {
        $user_id = "3";
        $user_full_name = $_POST["fullName"];
        $user_address = $_POST["address"];
        $user_email = $_POST["email"];
        $user_pass = $_POST["password"];

        $stmt = $connection->prepare("INSERT INTO tbl_users (user_id, user_full_name, user_address, user_email, user_pass) VALUES (?, ?, ?, ?, ?)");

        if ($stmt) {
            $stmt->bind_param("issss", $user_id, $user_full_name, $user_address, $user_email, $user_pass); 

            if ($stmt->execute()) {
                echo "User added successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error: " . $connection->error;
        }

        $connection->close(); 
    }
}
?>