<?php 
require_once 'connect_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $title = $_POST["title"];
    $content = $_POST["content"];

    $result = $note_query->add_note($title, $content);

    if($result == true){
        echo "<script>
                        alert('Note Added Successfully');
                        window.location.href = 'index.php';
            </script>";
    }else if($result == false){
        echo "<script>
                        alert('Note Failed to Added');
                        window.location.href = 'add.php';
            </script>";
    }else{
        echo "<script>window.location.href = '404.php';</script>";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jayson's Notepad - Create Note</title>
</head>
<body>

<div class="header">
    <h1>Jayson's Notepad - Create Note</h1>
    <div>
        <a class="btn" href="index.php">Back</a>
    </div>
</div>

<section class="section-form">

    <form class="create-form" method="POST" action="">
        <div class="input">
            <label for="title"> Title </label>
            <input type="text" name="title" id="title" required>
        </div>

        <div class="text-area">
            <label for="content"> Content </label>
            <textarea name="content" id="content" cols="8" ></textarea>
        </div>

        <button class="btn btn-inherit-width" type="submit"> Create </button>
    </form>

</section>

<footer>
    This project is for educational and personal development purposes.
</footer>

</body>
</html>