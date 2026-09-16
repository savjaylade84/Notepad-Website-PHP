<?php 

$servername = "localhost"; 
$username = "root";
$password = "";
$database = "note_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Faild". $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $title = $_POST["title"];
    $content = $_POST["content"];

    $statement = $conn->prepare("INSERT INTO notes (Title,Content) VALUES (?,?)");
    $statement->bind_param("ss", $title,$content);

    if( $statement->execute()){
        echo "<script>
                        alert('Note Added Successfully');
                        window.location.href = 'index.php';
            </script>";
    }else{
        echo "<script>
                        alert('Note Failed to Added');
                        window.location.href = 'add.php';
            </script>";
    }

    $statement->close();

}

$conn->close();

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



</body>
</html>