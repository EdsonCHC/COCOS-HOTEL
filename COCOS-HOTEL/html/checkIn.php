<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    <link rel="stylesheet" href="../styles/Styles.css">
    <link rel="shortcut icon" href="../media/hotel.png" type="image/x-icon">
</head>

<body>
    <div id="pattern-div-aside">
        <div id="admin-sidebar">
            <div id="div-admin-company">
                <img src="../media/hotel.png" alt="image-company">
                <h2><a href="#">Company</a></h2>
            </div>
            <div id="nav-admin">
                <ul class="admin-nav-ul">
                    <li>
                        <a href="../html/book.php" class="admin-nav-link">Booking</a>
                    </li>
                    <li>
                        <a href="../html/inventory.php" class="admin-nav-link">Inventory</a>
                    </li>
                    <li>
                        <a href="../html/staff.php" class="admin-nav-link">Staff</a>
                    </li>
                    <li>
                        
                    <a href="../html/chekin.php" class="admin-nav-link">check in</a>
                    </li>
                    <li>
                        
                    <a href="#" class="admin-nav-link"> Record</a>
                    </li>
                    <li>
                        <a href="#" class="admin-nav-link">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <div>
                <h1>Check in</h1>
            </div>
            <div>

                <table class="tabla">
                    <tr class="head">
                        <td>Id</td>
                        <td>Name</td>
                        <td>Bedrooms</td>
                        <td>Hour</td>

                    </tr>

                    <tr>
                        <td>
                            1

                        </td>
                        <td>
                            juanjose

                        </td>
                        <td>
                            personal

                        </td>
                        <td>
                            5:00
                        </td>
                        <td>

                            <div class="eliminar">
                                <a>
                                    Check Out
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="actualizar">
                                <a>
                                    Actualizar</a>
                        </td>
                    </tr>



                </table>
            </div>
        </div>
        <hr>
        <div>

            <form action="" class="form">
                <label for="">Name</label>
                <input type="text" name="user">
                <label for="">Bedrooms</label>
                <select name="select">
                    <option value="value3"> </option>
                    <option value="value1">Personal</option>
                    <option value="value2" selected>Group</option>
                </select>
                <label for="">Hour</label>
                <input type="time" name="hour">

                <input type="submit" value="Agregar">
            </form>



        </div>


</body>

</html>