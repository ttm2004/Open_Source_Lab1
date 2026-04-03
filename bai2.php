<?php

$chieudai = 0;
$chieurong = 0;
$dientich = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $chieudai = $_POST['chieudai'];
    $chieurong = $_POST['chieurong'];
    $dientich = $chieudai * $chieurong;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
    <div class="container">
        <form class="form-group" action="" method="post">
            <label for="chieudai">Chiều dài:</label>
            <input type="text" class="form-control" id="chieudai" name="chieudai" placeholder="Enter chiều dài">
            <label for="chieurong">Chiều rộng:</label>
            <input type="text" class="form-control" id="chieurong" name="chieurong" placeholder="Enter chiều rộng">
            <button type="submit">Submit</button>
        </form>
        <div class="result">
            <!-- <p>Diện tích: <?php echo "<script>alert('Diện tích: " . $dientich . "');</script>"; ?></p> -->
        </div>
    </div>
</body>
</html>
