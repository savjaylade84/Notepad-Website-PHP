<?php
require_once 'connect_db.php';

$id = $_GET["id"];

$result = $note_query->delete_note($id);

if ($result) {
    echo "<script>
                alert('Successfully to Delete Note');
         </script>";
} else if($result){
    echo "<script>
                alert('Failed to Delete Note');
        </script>";
}else{
        echo "<script>window.location.href = '404.php';</script>";
    }

echo "<script>window.location.href = 'index.php';</script>";


?>