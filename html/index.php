<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cocos Hotel</title>
    <link rel="stylesheet" href="../styles/Styles.css" />
  </head>
  <body>
    <?php
      include("./header.php");
    ?>
    <div id="message-section">
      <img src="../media/message-img.jpg" alt="hotel-room" />
      <div id="message">
        <h2 class="head-upper">welcome to</h2>
        <h1 class="head-upper">cocos hotel</h1>
        <p>
          Book your stay and enjoy Luxury redefined <br>
          at the most affordable rates
        </p>
      </div>
    </div>
    <main>
      <section id="rooms-section">
        <div id="grid-img">
          <img id="grid-img1" src="../media/window-room.jpg" alt="window-room">
          <img id="grid-img2" src="../media/open-door.jpg" alt="open-door-img">
        </div>
        <div id="wrap-txt">
          <h2>Welcome to ours <br> COCOS HOTEL</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, repellat?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat saepe illum
            similique atque facere exercitationem molestias pariatur laborum nobis aliquam!
          </p>
          <button class="book-btn">
            <a class="btn-link" href="">Book Now</a>
          </button>
        </div>
      </section>
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
      </section>
      <section id="last-section">
        <img id="luxury-room" src="../media/room-img.jpg" alt="room-img">
        <h2>Enjoy our luxury rooms</h2>
      </section>
    </main>
  <?php
    include("./footer.php");
  ?>
  </body>
</html>
