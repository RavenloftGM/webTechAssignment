<?php
session_start();
require_once 'conn.php';

// verifies the form has actually been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    if ($connection) {
            // finds the highest user id in the users table
            $query = "SELECT MAX(user_id) AS max_user_id FROM tbl_users";
            $result = mysqli_query($connection, $query);
            $record = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            // adds 1 and uses this as the registering user's id
            $user_id = $record['max_user_id'] + 1;

            // stores the values the user entered in the form
        $user_full_name = $_POST["fullName"];
        $user_address = $_POST["address"];
        $user_email = $_POST["email"];
        $user_pass = $_POST["password"];

        // prepared statement prevents sql injection
        $stmt = $connection->prepare("INSERT INTO tbl_users (user_id, user_full_name, user_address, user_email, user_pass) VALUES (?, ?, ?, ?, ?)");

        // establishes the expected values - integer for the id, strings for everything else 
        if ($stmt) {
            $stmt->bind_param("issss", $user_id, $user_full_name, $user_address, $user_email, $user_pass); 

            // user info is inserted here, or an error is displayed
            if ($stmt->execute()) {
                header ('Location: login.php');
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