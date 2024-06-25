<?php
require_once './connection.php';
?>

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
  <?php require_once "./includes/header.php"; ?>

  <div class="container-fluid">
    <img src="image/home/home4.webp" class="d-block main-image-home" alt="...">
  </div>

  <div class="container">
    <h4 class="mt-4 mb-4 font-size-medium">Choose Your Category</h4>
    <div class="row justify-content-center">
        <div class="col-5 col-md-3">
            <a href="categorypage.php?category=Men">
                <div class="category-box">
                    <img src="image/t shirt/men.webp" alt="Men" class="category-image">
                    <div class="category-name">Men</div>
                </div>
            </a>
        </div>
        <div class="col-5 col-md-3">
            <a href="categorypage.php?category=Women">
                <div class="category-box">
                    <img src="image/t shirt/girl.webp" alt="Women" class="category-image">
                    <div class="category-name">Women</div>
                </div>
            </a>
        </div>
        <div class="col-5 col-md-3">
            <a href="categorypage.php?category=Kids">
                <div class="category-box">
                    <img src="image/t shirt/kids.webp" alt="Kids" class="category-image">
                    <div class="category-name">Kids</div>
                </div>
            </a>
        </div>
        <div class="col-5 col-md-3">
            <a href="categorypage.php?category=Sport">
                <div class="category-box">
                    <img src="image/t shirt/sport.webp" alt="Sport" class="category-image">
                    <div class="category-name">Sport</div>
                </div>
            </a>
        </div>
    </div>
</div>

  <!-- product card -->
  <div class="container">
    <h4 class="mt-4 mb-4 font-size-medium">New Arrival</h4>
    <div class="row">
      <?php
      // Fetch products from the database
      $query = "SELECT p.id, p.name, p.description, p.price, i.image_path 
                FROM product p
                JOIN image i ON p.image_image_id = i.image_id";
      $result = Database::search($query);

      while ($row = $result->fetch_assoc()) {
      ?>
        <div class="col-md-3 col-6 mb-4">
          <div class="card">
            <a href="singleProductView.php?id=<?php echo $row['id']; ?>">
              <img src="<?php echo $row['image_path']; ?>" class="card-img-top" alt="Product Image">
              <div class="card-body">
                <h5 class="product-name font-size-small"><?php echo htmlspecialchars($row['name']); ?></h5>
                <p class="card-text"><?php echo htmlspecialchars($row['price']); ?></p>
              </div>
            </a>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

  <!-- captain services -->
  <div class="container">
    <div class="row main-box">
      <div class="col-6 col-md-3" style="background-color: #8E75F5;">
        <img src="image/icon/colored-pencils.png" alt="" width="25%" class="center-icon">
        <p class="topic font-size-small">50+ colors</p>
      </div>
      <div class="col-6 col-md-3" style="background-color: #8E75F5;">
        <img src="image/icon/return.png" alt="" width="25%" class="center-icon">
        <p class="topic font-size-small">Free returns</p>
      </div>
      <div class="col-6 col-md-3" style="background-color: #8E75F5;">
        <img src="image/icon/high-quality.png" alt="" width="25%" class="center-icon">
        <p class="topic font-size-small">Dreamy Quality</p>
      </div>
      <div class="col-6 col-md-3" style="background-color: #8E75F5;">
        <img src="image/icon/transportation.png" alt="" width="25%" class="center-icon">
        <p class="topic font-size-small">Fast worldwide shipping</p>
      </div>
    </div>
  </div>

  <?php require_once "./includes/footer.php"; ?>
  <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>
