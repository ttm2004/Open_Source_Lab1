<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = $_POST['name'];
    echo "<script>alert('Xin chào: $name!');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>
<body>
    <div class="container">
        <form class="form-group" action="" method="post">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>