<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "note_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$id = $_POST["id"];
$title = $_POST["title"];
$content = $_POST["content"];

$sql = "UPDATE notes 
        SET Title = '$title', Content = '$content'
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "<script>
                alert('Successfully to Update Note');
                window.location.href = 'index.php';
        </script>";
} else {
    echo "<script>
                alert('Failed to Update Note');
                window.location.href = 'edit.php';
        </script>";
}

$conn->close();

?>

