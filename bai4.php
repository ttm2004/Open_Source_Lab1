<?php
$ten = $cu = $moi = $dongia = $tongtien = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ten = $_POST['ten'];
    $cu = $_POST['cu'];
    $moi = $_POST['moi'];
    $dongia = $_POST['dongia'];

    if(is_numeric($cu) && is_numeric($moi) && is_numeric($dongia) && $moi >= $cu) {
        $tongtien = ($moi - $cu) * $dongia;
    } else {
        echo "<script>alert('Dữ liệu không hợp lệ!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thanh toán tiền điện</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg, #36d1dc, #5b86e5);
            padding: 40px;
        }

        .container {
            width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #36d1dc;
            border: none;
            border-radius: 8px;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background: #2bb3bd;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background: #5b86e5;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Thanh toán tiền điện </h2>

    <form method="post">
        <input type="text" name="ten" placeholder="Tên chủ hộ" required>
        <input type="number" name="cu" placeholder="Chỉ số cũ" required>
        <input type="number" name="moi" placeholder="Chỉ số mới" required>
        <input type="number" name="dongia" placeholder="Đơn giá (VNĐ)" required>
        <button type="submit">Tính tiền</button>
    </form>

    <?php if($tongtien !== ""): ?>
    <table>
        <tr>
            <th>Tên chủ hộ</th>
            <th>Chỉ số cũ</th>
            <th>Chỉ số mới</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        <tr>
            <td><?= htmlspecialchars($ten) ?></td>
            <td><?= $cu ?></td>
            <td><?= $moi ?></td>
            <td><?= number_format($dongia) ?></td>
            <td><?= number_format($tongtien) ?> VNĐ</td>
        </tr>
    </table>
    <?php endif; ?>

</div>

</body>
</html>