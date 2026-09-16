<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "lab_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$id = $_GET["id"];

$sql = "DELETE FROM users WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "User deleted successfully.";
} else {
    echo "Error deleting user: " . $conn->error;
}

$conn->close();

?>