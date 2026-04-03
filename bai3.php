<!-- Bài 3: Tính chu vi và diện tích hình tròn -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $bankinh = $_POST['bankinh'];
    $chuvi = 2 * pi() * $bankinh;
    $dientich = pi() * pow($bankinh, 2);
    echo "<script>alert('Chu vi: $chuvi, Diện tích: $dientich');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
</head>
<body>
    <div class="container">
        <form class="form-group" action="" method="post">
            <label for="bankinh">Bán kính:</label>
            <input type="text" class="form-control" id="bankinh" name="bankinh" placeholder="Enter bán kính">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>