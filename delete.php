<?php
require_once 'loadenv.php';

$servername = $_ENV['DB_HOST']; 
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$database = $_ENV['DB_NAME'];

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$id = $_GET["id"];

$statement = $conn->prepare("DELETE FROM notes WHERE id = ?");
$statement->bind_param("s", $id);

if ($statement->execute()) {
    echo "<script>
                alert('Successfully to Delete Note');
         </script>";
} else {
    echo "<script>
                alert('Failed to Delete Note');
        </script>";
}

echo "<script>window.location.href = 'index.php';</script>";

$conn->close();

?>