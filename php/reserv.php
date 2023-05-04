<?php

    if($_POST["submit"]){
        session_start();
    }
function generateCode($long)
{

    $data = "";
    for ($i = 1; $i <= $long; $i++) {
        $number = rand(0, 9);
        $data .= $number;
    }
    return $data;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Code</title>
    <link rel="shortcut icon" href="../media/hotel.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/reserv.css">
</head>

<body class="body">
    <div id="code">
        <h1>Save this code to make it easier to check your reservation.</h1>
        <h2>"The code will be generated when you make the reservation."</h2>
        <h3>
            <?php if (isset($_POST["submit"])) {
                $code = generateCode(10);
                echo $code;
            }
            ?>
        </h3>
        <div id="info-re">
            <h3 class="user-info">
                <?php if (isset($_POST["submit"])) {
                    $firstName = $_POST["FrtName"];
                    $lastName = $_POST["LstName"];
                    echo $firstName . " " . $lastName;
                }
                ?>
            </h3>
            <h3 class="user-info">
                <?php
                if (isset($_POST["submit"])) {
                    $room = $_POST["room"];
                    $date = $_POST["date"];
                    $time = $_POST["time"];
                    echo $room . " " . $date . " " . $time;
                }
                ?>
            </h3>
        </div>
    </div>
    <?php

    require_once("../php/conex.php");
    require_once("../php/methods.php");

    $firstName = $_POST["FrtName"];
    $lastName = $_POST["LstName"];
    $phone = $_POST["phone"];
    $dui = $_POST["dui"];
    $room = $_POST["room"];
    $date = $_POST["date"];
    $time = $_POST["time"];


    $datos = array(
        $firstName,
        $lastName,
        $phone,
        $dui,
        $room,
        $date,
        $time,
        $code
    );
    $obj = new methods;
    $obj->insertData($datos);

    ?>
        <button class="book-btn" type="submit">
        <a href="../html/index.php" class="btn-link">Back to home</a>
    </button>
    <!-- ! DESCATIVA tecla f5 ! -->
    <script>
        function checkKeyCode(evt) {

            var evt = (evt) ? evt : ((event) ? event : null);
            var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
            if (event.keyCode == 116) {
                evt.keyCode = 0;
                return false
            }
        }
        document.onkeydown = checkKeyCode;
    </script>
</body>

</html>