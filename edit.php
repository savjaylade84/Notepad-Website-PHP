<?php 
require_once 'connect_db.php';

$id = $_GET["id"];

$result = $note_query->get_note($id);

$note = $result->fetch_assoc();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jayson's Notepad - Edit Note</title>
</head>
<body>
    
<div class="header">
    <h1>Jayson's Notepad - Edit Note</h1>
    <div>
        <a class="btn" href="index.php">Back</a>
    </div>
</div>

<section class="section-form">

    <form class="create-form" method="POST" action="update.php">

        <input type="hidden" name="id" value="<?= $note["ID"] ?>">

        <div class="input">
            <label for="title"> Title </label>
            <input type="text" name="title" value="<?= $note["Title"] ?>">
        </div>

        <div class="text-area">
            <label for="content"> Content </label>
            <textarea name="content" id="content" cols="8" ><?= $note["Content"] ?></textarea>
        </div>

        <button class="btn btn-inherit-width" type="submit"> Update </button>
    </form>

</section>

<footer>
    This project is for educational and personal development purposes.
</footer>

</body>
</html>