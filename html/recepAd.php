<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminstrator</title>
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
                    <li class="admin-list"><i class="fa-sharp fa-solid fa-house" id="i-nav-admin"></i>   
                        <a href="#" class="admin-nav-link">General</a>
                    </li>
                    <li class="admin-list"><i class="fa-solid fa-users" id="i-nav-admin"></i>
                        <a href="#" class="admin-nav-link">Users</a>
                    </li>
                    <li class="admin-list"><i class="fa-solid fa-right-from-bracket" id="i-nav-admin"></i>
                        <a href="#" class="admin-nav-link">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    <div id="workpace">
        <div class="workpace-recep">
            <h2>Workpace Receptionist</h2>
            <div class="btn-workpace">
                <a href="#"><input type="button" value="Add"></a>  
                <a href="#"><input type="button" value="Update"></a>  
                <a href="#"><input type="button" value="Delete"></a>  
            </div>
            <div class="recep-space">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </div>
        </div>
        <div class="workpace-room">
            <h2>Workpace Room</h2>
            <div class="btn-workpace"> 
                <a href="#"><input type="button" value="Add"></a>  
                <a href="#"><input type="button" value="Update"></a>  
                <a href="#"><input type="button" value="Delete"></a>  
            </div>
            <div class="room-space">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </div>
        </div>
    </div>
    </div>
    <?php
        include("./footer.php")
    ?>
    <!-- VALIDACIÓN DE FORMULARIO -->
    <script>
        let name = document.getElementById('frt-name');
        name.oninvalid = function(e){e.target.setCustomValidity('The first name can\'t have numbers and especial characters');}
        
    </script>
</body>

</html>