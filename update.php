<?php
require_once 'connect_db.php';

$id = $_POST["id"] ?? "";
$title = $_POST["title"] ?? "";
$content = $_POST["content"] ?? "";

$result = $note_query->update_note( $id, $title, $content);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if ($result == true) {
        echo "<script>
                        alert('Successfully to Update Note');
                        window.location.href = 'index.php';
                </script>";
        } else if($result == false) {
        echo "<script>
                        alert('Failed to Update Note');
                        window.location.href = 'edit.php';
                </script>";
        }else{
                echo "<script>window.location.href = '404.php';</script>";
        }
}

?>

