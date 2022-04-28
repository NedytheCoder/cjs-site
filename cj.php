<?php include("dog-food-array.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cj.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Great+Vibes&family=Ibarra+Real+Nova:ital,wght@0,400;0,500;1,500&family=Neuton:ital@0;1&family=Poppins:wght@300;400;500;600&family=Sacramento&display=swap" rel="stylesheet">
    <title>CJ's Site</title>
    
</head>
<body>
  <nav style="padding: 5px; background-color:#F4F1EE;">
  <nav class="navbar navbar-expand-lg navbar-light container" style="padding: 5px;">
    <div class="container-fluid">
      <div><p>Cee-Jay's</p><p>Store</p></div> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto" style="margin-left:37%;">
          <span>Welcome to our Store!</span>
        </ul>
        <div class="icon-links">
        <a href="" style="margin-right:20%;"><img src="./img/icons8-search-50 (4).png" alt=""></a>
       <a href="#contacts" style="margin-right:20%;"><img src="./img/icons8-phone-50 (3).png" alt=""></a>
        <a href="cart.php"><img src="./img/icons8-shopping-cart-64 (2).png" alt="" class="cart"></a>
</div>
      </div>
    </div>
  </nav> 
  </nav>
  <!-- --------------------------------------------------------------- -->
  <div class="land_page">
    <div class="container">
      <div class="writeup">
      <h2>Important</h2>
      <h2>Ingredients. A</h2>
      <h2>healthier bestfriend</h2>
    </div> 
    <div class="links container">
     <a href="#puppy_food" class="pup-link">
        <img src="./img/puppy.png" alt="">
        <h3>PUPPY</h3>
        <small>Up to 12 - 15 months</small>
    </a>
      <a href="#adult_food" class="adu-link">
        <img src="./img/dog.png" alt="">
        <h3>ADULT</h3>
        <small>1 - 7 years</small>
    </a>
    </div>
    </div>
  </div>
  <!-- --------------------------------------------------------------- -->
<div class="puppy_section">
<div class="container" id="puppy_food">
    <h2>PUPPY FOOD</h2>
    <p>Designed specifically for the demanding nutritional needs of young, growing dogs, our imported puppy food is formulated with nutrients that are proven to help supplement and support developing bodies and immune systems.</p>
    <div class="food-cards container">
    <?php foreach($pup_food as $food):?>
      <a href="purchase.php" class="card">
        <img src=<?= $food["image"] ?> alt="" style="width: 70%; margin: auto auto; margin-bottom: 7%;">
        <p class="desc"><?= $food["lead-title"] ?></p>
        <h3 class="title"><?= $food["title"] ?></h3>
        <p class="desc"><?= $food["description"] ?></p>
        <p class="price">$<?= $food["price"] ?></p> 
    </a>
      <?php endforeach ?>
    </div>
</div>
</div>
<div class="adult_section">
  <div class="container" id="adult_food">
    <h2>ADULT DOG FOOD</h2>
    <p>The comprehensive line of our imported adult dog food is precisely balanced and formulated to meet the varying nutritional needs of a wide range of sizes, breeds and lifestyles. Because a dog’s nutritional needs depend on a number of unique factors, it’s important to find food that optimizes health at every adult age.</p>
    <div class="food-cards container">
    <?php foreach($adu_food as $food):?>
      <a href="purchase.php" class="card" style="background-color: rgb(102,56,22,0.05);">
        <img src=<?= $food["image"] ?> alt="" style="margin: auto auto; width: 70%; margin-bottom: 7%;">
        <p class="desc"><?= $food["lead-title"] ?></p>
        <h3 class="title"><?= $food["title"] ?></h3>
        <p class="desc"><?= $food["description"] ?></p>
        <p class="price">$<?= $food["price"] ?></p> 
    </a>
      <?php endforeach ?>
    </div>
</div>
</div>

<div class="" id="contacts">
    <div class="container contact">
      <div class="form">
        <h2>What's your message for us</h2>
        <small>Tell us below</small>
        <form action="" method="post">
          <div>
            <p>Name:</p> 
            <input type="text" placeholder="Lastname Firstname">
          </div>
          <div>
            <p>Email:</p> 
            <input type="text" placeholder="Enter active email address">
          </div>
          <div>
            <p>Message:</p>
            <textarea name="" id="" cols="30" rows="10" placeholder="Whats your message for us"></textarea>
          </div>
          <button><div>Send <img src="./img/icons8-sent-24.png" alt=""></div></button>
        </form>

        <h2 style="margin-top: 5%;">You can also get us on here</h2>
        <div class="sol-flex">
        <a class="socials r whatsapp">
          <img src="./img/icons8-whatsapp-24.png" alt="">
        </a>
        <a class="socials r twitter">
          <img src="./img/icons8-whatsapp-24.png" alt="">
        </a>
        <a class="socials r instagram">
          <img src="./img/icons8-whatsapp-24.png" alt="">
        </a>
        <a class="socials r twitter">
          <img src="./img/icons8-whatsapp-24.png" alt="">
        </a>
        <a class="socials twitter">
          <img src="./img/icons8-whatsapp-24.png" alt="">
        </a>
        </div>
    </div>
</div>
</div>


<footer class="" style="text-align:center; color:rgb(81,66,55); padding:1%;">Copyright&copy; CJ's dog food <?php echo date('Y')?></footer>
<script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>