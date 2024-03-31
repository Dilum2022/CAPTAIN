<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Captain | Home</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
  <?php require_once "./includes/header.php" ?>

<div class="container-fluid">
<img src="image/home/home4.webp" class="d-block main-image-home" alt="..." >
</div>


<!-- category -->

<div class="container">
  <h4 class="mt-4 mb-4 second-font">Choose Your Category</h4>
    <div class="row">
        <div class="col-md-3"><a href="categorypage.php">
            <div class="category-box">
                <img src="image/t shirt/men.webp" alt="Men" class="category-image">
                <div class="category-name">Men</div>
            </div>
        </a>
        </div>
        <div class="col-md-3"><a href="categorypage.php">
            <div class="category-box">
                <img src="image/t shirt/girl.webp" alt="Women" class="category-image">
                <div class="category-name">Women</div>
            </div></a>
        </div>
        <div class="col-md-3"><a href="categorypage.php">
            <div class="category-box">
                <img src="image/t shirt/kids.webp" alt="Kids" class="category-image">
                <div class="category-name">Kids</div>
            </div></a>
        </div>
        <div class="col-md-3"><a href="categorypage.php">
            <div class="category-box">
                <img src="image/t shirt/sport.webp" alt="Sport" class="category-image">
                <div class="category-name">Sport</div>
            </div>
        </div></a>
    </div>
</div>





<!-- product card -->


<div class="container">
    <h4 class="mt-4 mb-4 second-font">New Arrival</h4>
    <div class="row">
      <div class="col-md-3 col-6 mb-4">
        <div class="card">
          <a href="singleProductView.php">
            <img src="image/t shirt/tshirt3.jpg" class="card-img-top" alt="Product Image">
            <div class="card-body">
              <h5 class="product-name">Blue Acid Wash Sleeveless</h5>
          </a>
          <p class="card-text">$19.99</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-6 mb-4">
      <div class="card">
        <a href="singleProductView.php">
          <img src="image/t shirt/tshirt4.jpg" class="card-img-top" alt="Product Image">
          <div class="card-body">
            <h5 class="product-name">Captain T-shirt Men</h5>
        </a>
        <p class="card-text">$19.99</p>
      </div>
    </div>
  </div>

  <div class="col-md-3 col-6 mb-4">
    <div class="card">
      <a href="singleProductView.php">
        <img src="image\t shirt\SLASHER-Website-1_22163099-9b7e-43c8-963a-05176dfbe4b8.webp" class="card-img-top" alt="Product Image">
        <div class="card-body">
          <h5 class="product-name">Captain T-shirt Men</h5>
      </a>
      <p class="card-text">$19.99</p>
    </div>
  </div>
  </div>

  <div class="col-md-3 col-6 mb-4">
    <div class="card">
      <a href="singleProductView.php">
        <img src="image/t shirt/tshirt6.webp" class="card-img-top" alt="Product Image">
        <div class="card-body">
          <h5 class="product-name">Captain T-shirt Men</h5>
      </a>
      <p class="card-text">$19.99</p>
    </div>
  </div>
  </div>
  </div>
  </div>


  <!-- captain services -->

  <div class="container">
    <div class="row main-box">
        <div class="col-6 col-md-3 " style="background-color: #8E75F5;">
         
            <img src="image\icon\colored-pencils.png" alt="" width="25%" class="center-icon">
            <p class="topic">50+ colors</p>
        </div>
        <div class="col-6 col-md-3 " style="background-color: #8E75F5;">
            
            <img src="image\icon\return.png" alt="" width="25%" class="center-icon">
            <p class="topic">Free returns </p>
        </div>
        <div class="col-6 col-md-3 " style="background-color: #8E75F5;">
          
            <img src="image\icon\high-quality.png" alt="" width="25%" class="center-icon">
            <p class="topic">Dreamy Quality </p>
        </div>
        <div class="col-6 col-md-3 " style="background-color: #8E75F5;">
      
            <img src="image\icon\transportation.png" alt="" width="25%" class="center-icon">
            <p class="topic">Fast worldwide shipping</p>
        </div>
    </div>
</div>



  <?php require_once "./includes/footer.php" ?>
  <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>