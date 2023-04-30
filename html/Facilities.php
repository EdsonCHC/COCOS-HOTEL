<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Facilities</title>
  <link rel="stylesheet" href="../styles/Styles.css" />
  <link rel="icon" href="../media/hotel.png" type="image/x-icon" />
</head>

<body>
  <?php
  include("./header.php");
  ?>
  <main>
    <div id="text-div">
      <h1 id="title">
        facilities
      </h1>
      <p id="title-txt">We want your stay at our lush hotel to be truly unforgettable. That is why we give special attention to all of
        your needs so that we can ensure an experience quite uniquw. Luxury hotels offers the perfect setting with
        stunning views for leisure and our modern luxury resort facilities will help you enjoy the best of all. 
      </p>
    </div>
    <div class="image">
      <img src="../media/pool-img.jpg" alt="pool-img">
      <div class="rectangle-text">
        <h2 class="img-title">
          swimming pool
        </h2>
      </div>
    </div>
    <div class="image">
      <img src="../media/restaurant-img.jpg" alt="restaurant-img">
      <div class="rectangle-text">
        <h2 class="img-title">
          restaurant
        </h2>
      </div>
    </div>
    <div class="image">
      <img src="../media/spa-img.jpg" alt="spa-img">
      <div class="rectangle-text">
        <h2 class="img-title">
          the spa
        </h2>
      </div>
    </div>
</main>
  <?php
    include("./footer.php")
  ?>
  <!--Script para iconos-->
  <script src="https://kit.fontawesome.com/7bcd40cb83.js" crossorigin="anonymous"></script>
</body>

</html>