<?php include "dog-food-array.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Great+Vibes&family=Ibarra+Real+Nova:ital,wght@0,400;0,500;1,500&family=Neuton:ital@0;1&family=Poppins:wght@300;400;500;600&family=Sacramento&display=swap" rel="stylesheet">
    <title>My Cart</title>
</head>
<body>
    <div class="table">
    <table>
        <thead>
            <th></th>
            <th class="prod">Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sub-total</th>
        </thead>
        <?php foreach($pup_food as $product):?>
        <tbody class="tbody">
            <td><a href=""><img src="./img/icons8-xbox-x-48.png" alt="" class="cancel"></a></td>
            <td data-label="Product"><img src="<?= $product["image"]?>" alt=""><p><?= $product["title"]?></p></td>
            <td data-label="Price"><?= "$" . $product["price"]?></td>
            <td data-label="Quantity">2</td>
            <td data-label="Sub-total">$2,500,000</td>
        </tbody>
        <?php endforeach?>
    </table>
</div>
<div class="chexkout">
    <h1>And your carts total is: &nbsp;<span>$10,000,000</span></h1>
</div>
<div class="chexkout" style="height:fit-content;">   
    <a href="checkout.php"><button type="submit" href="">Proceed to Checkout</button></a>
</div>

</body>
</html>