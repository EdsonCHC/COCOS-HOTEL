<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rooms</title>
    <link rel="stylesheet" href="../styles/Styles.css" />
    <link rel="icon" href="../media/hotel.png" type="image/x-icon">
  </head>
  <body>
    <?php
      include("./header.php");
    ?>
    <div id="title-page">
      <img src="../media/faci-img.jpg" alt="">
      <div id="title-message">
        <h1>We have amazing rooms browser your favorite</h1>
      </div>
    </div>
    <section id="luxury-rooms">
        <h2>Choose the best place for your vacation</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
           Aut qui maxime culpa possimus facilis illum!</p>
        <div id="grid-rooms">
          <div class="room-card">
            <img src="../media/room-img.jpg" alt="room-img" class="room-img">
            <div class="room-info">
              <p class="room-class">Single</p>
              <button class="book-btn">
                <a href="" class="btn-link">$100/day</a>
              </button>
            </div>
          </div>
          <div class="room-card">
            <img src="../media/room-img.jpg" alt="room-img" class="room-img">
            <div class="room-info">
              <p class="room-class">Family</p>
              <button class="book-btn">
                <a href="" class="btn-link">$100/day</a>
              </button>
            </div>
          </div>
          <div class="room-card">
            <img src="../media/room-img.jpg" alt="room-img" class="room-img">
            <div class="room-info">
              <p class="room-class">Couple</p>
              <button class="book-btn">
                <a href="" class="btn-link">$100/day</a>
              </button>
            </div>
          </div>
          <div class="room-card">
            <img src="../media/room-img.jpg" alt="room-img" class="room-img">
            <div class="room-info">
              <p class="room-class">Residential</p>
              <button class="book-btn">
                <div class="btn-link">$100/day</div>
              </button>
            </div>
          </div>
        </div>
        <div id="grid-rooms">
          <div class="room-card">
            <img src="../media/room-img.jpg" alt="room-img" class="room-img">
            <div class="room-info">
              <p class="room-class">Single</p>
              <button class="book-btn">
                <a href="" class="btn-link">$100/day</a>
              </button>
            </div>
          </div>
          <div class="room-card">
            <img src="../media/room-img.jpg" alt="room-img" class="room-img">
            <div class="room-info">
              <p class="room-class">Family</p>
              <button class="book-btn">
                <a href="" class="btn-link">$100/day</a>
              </button>
            </div>
          </div>
          <div class="room-card">
            <img src="../media/room-img.jpg" alt="room-img" class="room-img">
            <div class="room-info">
              <p class="room-class">Couple</p>
              <button class="book-btn">
                <a href="" class="btn-link">$100/day</a>
              </button>
            </div>
          </div>
          <div class="room-card">
            <img src="../media/room-img.jpg" alt="room-img" class="room-img">
            <div class="room-info">
              <p class="room-class">Residential</p>
              <button class="book-btn">
                <div class="btn-link">$100/day</div>
              </button>
            </div>
          </div>
        </div>
      </section>
    <?php
      include("./footer.php");
    ?>
  </body>
</html>
