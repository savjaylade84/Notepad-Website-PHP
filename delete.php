<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "note_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$id = $_GET["id"];

$sql = "DELETE FROM notes WHERE id = $id";

if ($conn->query($sql) === TRUE) {
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