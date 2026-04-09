<?php  
$dientich = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {      
    $chieudai = $_POST['chieudai'];     
    $chieurong = $_POST['chieurong'];     

    if(is_numeric($chieudai) && is_numeric($chieurong)) {
        $dientich = $chieudai * $chieurong;
    } else {
        $dientich = "Vui lòng nhập số hợp lệ!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính diện tích</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            width: 320px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4facfe;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #00c6ff;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tính diện tích</h2>
    
    <form method="post">
        <input type="text" name="chieudai" placeholder="Nhập chiều dài" required>
        <input type="text" name="chieurong" placeholder="Nhập chiều rộng" required>
        <button type="submit">Tính</button>
    </form>

    <div class="result">
        <?php 
            echo "Chiều dài: $chieudai<br>";
            echo "Chiều rộng: $chieurong<br>";
            if($dientich !== "") {
                echo "Diện tích: $dientich";
            }
        ?>
    </div>
</div>

</body>
</html>