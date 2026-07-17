<?php
require 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop - Catalog (Buoi1)</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        table{
            border-collapse: collapse;
            width: 600px;
        }
        table, th, td{
            border: 1px solid #000;
        }
        th, td{
            padding: 10px;
            text-align: center;
        }
        th{
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>MiniShop - Catalog (Buoi1)</h1>
    <table>
        <thead>
            <tr>
                <th>SKU</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <?php 
                    $category_name = '';
                    foreach($categories as $category){
                        if($category['id'] == $product['category_id']){
                            $category_name = $category['name'];
                            break;
                        }
                    }
                ?>
                <tr>
                    <td><?php echo $product['sku']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo number_format($product['price'], 0, ',', '.'); ?> VND</td>
                    <td><?php echo $category_name; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>