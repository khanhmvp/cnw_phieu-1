<?php
require_once __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
         /* body {
            font-family: Arial, Helvetica, sans-serif; 
        } */
        table{
            border-collapse: collapse;
            width: 600px;
        }
        /* table, th, td{
            border: 1px solid #000;aaaa
        } */
        th, td{
            padding: 10px;
            text-align: center;
        }
        /* th{
            background-color: #f2f2f2;
        } */
    </style>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <table>
            <tr>
                <th>SKU</th>
                <th>Name</th>
                <th>Danh mục</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['sku']) ?></td>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= htmlspecialchars($product['category_name']) ?></td>
                    <td><?= number_format($product['price'])?></td>
                    <td><?= htmlspecialchars($product['qty']) ?></td>
                    <td><?= number_format($product['line_total']) ?></td>
                </tr>
            <?php endforeach; ?>
    </table>
    <h3> Số sản phẩm = <?= count($products) ?></h3>
    <h3> Tổng giá trị khi bán hết = <?= number_format($totalInventory) ?> VND</h3>
    <!-- <pre><?php var_dump($products); ?></pre> -->
</body>
</html>
