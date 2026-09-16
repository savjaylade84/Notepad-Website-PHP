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
                alert('Update Successfully');
                window.location.href = 'index.php';
         </script>";
} else {
        echo "<script>
                        alert('Note Failed to Added');
                        window.location.href = 'editphp';
             </script>";
}

$conn->close();

?>

