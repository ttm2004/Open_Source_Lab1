<?php
$c = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];

    if(is_numeric($a) && is_numeric($b) && $a > 0 && $b > 0) {
        $c = sqrt($a*$a + $b*$b);
    } else {
        echo "<script>alert('Vui lòng nhập số hợp lệ!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính cạnh huyền</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            width: 350px;
            text-align: center;
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            transition: 0.3s;
        }

        input:focus {
            border-color: #667eea;
            outline: none;
            box-shadow: 0 0 5px rgba(102,126,234,0.5);
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: #667eea;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #5a67d8;
        }

        .result {
            margin-top: 15px;
            font-weight: bold;
            color: #333;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Tính cạnh huyền</h2>

    <form method="post">
        <input type="number" step="any" name="a" placeholder="Nhập cạnh a" required>
        <input type="number" step="any" name="b" placeholder="Nhập cạnh b" required>
        <button type="submit">Tính</button>
    </form>

    <?php if($c !== ""): ?>
        <div class="result">
            Cạnh huyền: <?= round($c, 2) ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>