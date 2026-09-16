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

$id = $_POST["id"];
$title = $_POST["title"];
$content = $_POST["content"];

$sql = "UPDATE notes 
        SET Title = '$title', Content = '$content'
        WHERE id = $id";

$statement = $conn->prepare("UPDATE notes set Title = ?, Content = ? where id = ?");
$statement->bind_param("sss", $title, $content, $id);

if ($statement->execute()) {
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

