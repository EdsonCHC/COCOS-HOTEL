<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a room</title>
    <link rel="stylesheet" href="../styles/Styles.css">
    <link rel="shortcut icon" href="../media/hotel.png" type="image/x-icon">
</head>

<body>
    <?php
    include("./header.php")
        ?>
    <div id="present-img">
        <img src="../media/message-img.jpg" alt="presentation-img">
    </div>
    <div id="form-div">
        <div id="info">
            <h1>
                Book one of our rooms free of charge
            </h1>
            <ul id="info-ul">
                <li class="info-list"><i class="fa-solid fa-location-dot"></i>
                    <p>Lorem, ipsum dolor.</p>
                </li>
                <li class="info-list"><i class="fa-sharp fa-solid fa-phone-volume"></i>
                    <p>Lorem, ipsum dolor.</p>
                </li>
                <li class="info-list"><i class="fa-solid fa-envelopes-bulk"></i>
                    <p>Lorem, ipsum dolor.</p>
                </li>
            </ul>
        </div>
        <form action="">
            <label id="flex-label">
                <label for="">
                    <input type="text" id="frt-name" placeholder="First name" name="FrtName" pattern="[a-zA-Z]+" required>
                    <div id="err1" class="errM"></div>
                </label>
                <label for="">
                    <input type="text" id="lst-name" placeholder="Last name" name="LstName" pattern="[A-Za-z]+" required>
                    <div id="err2" class="errM"></div>
                </label>
            </label>
            <label for="num-tel">
                <input type="tel" placeholder="Phone number" pattern="^([0-9])*$" id="phone">
                <div id="err3" class="errM"></div>
            </label>
            <select name="room" required>
                <option value="" selected disabled>Room type</option>
                <option value="Single">Single</option>
                <option value="Family">Family</option>
                <option value="Couple">Couple</option>
                <option value="Residential">Residential</option>
            </select>
            <label for="">
                <input type="date" name="date" required>
            </label>
            <input type="submit" value="Book Room" id="sub">
        </form>
    </div>
    <?php
        include("./footer.php")
    ?>
    <script src="../js/valBook.js">

    </script>
</body>

</html>