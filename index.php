<?php 

$servername = "localhost"; 
$username = "root";
$password = "";
$database = "note_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Faild". $conn->connect_error);
}

$result = $conn->query("SELECT ID,Title,Content,date_created FROM notes;");


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Users</title>
</head>
<body>
    
<div class="header">
    <h1>Jayson's Notepad</h1>
    <div>
        <a class="btn" href="add.php">New Note</a>
    </div>
</div>

<section class="note-collection">
    <?php  while ($note = $result->fetch_assoc()){ ?>

        <div class="note-card">
            <h3><?= $note["Title"] ?></h3>
            <h5><?= $note["date_created"] ?></h5>
            <h5 class="content"><?= $note["Content"] ?></h5>
            <div class="note-card-btns">
                <a class="btn btn-edit" href="edit.php?id=<?= $note["ID"] ?>">Edit</a>
                <a class="btn btn-delete" href="delete.php?id=<?= $note["ID"] ?>" onclick="return confirm('Are you sure you want to delete this note?');">
                    Delete
                </a>
            </div>
        </div>

    <?php }?>
</section>

</body>
</html>