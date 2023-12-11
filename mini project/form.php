<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
   
    $name = $_GET['name'];
    $email = $_GET['email'];
    $number = $_GET['number'];
    $comment = $_GET['comment'];

    
    echo "<h2>Feedback Received</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Number:</strong> $number</p>";
    echo "<p><strong>Feedback:</strong> $comment</p>";
    echo "<p> Thank You </P>";
   
}
?>
</body>
</html>

