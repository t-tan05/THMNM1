<?php
    include_once "config.php";
    
    $sql = "select * from products";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $products = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hello</p>
    <h1>Trang sản phẩm</h1>
    <table border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>price</td>
        </tr>
        <?php
            foreach($products as $i){
                ?>
                    <tr>
                        <td><?php echo $i->id ?></td>
                        <td><?php echo $i->name ?></td>
                        <td><?php echo $i->price ?></td>
                    </tr>
                <?php
            }
        ?>



    </table>
</body>
</html>