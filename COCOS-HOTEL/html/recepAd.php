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
                    
                </ul>
                <ul class="admin-nav-ul-log">
                    <li class="admin-list"><i class="fa-solid fa-right-from-bracket" id="i-nav-admin"></i>
                        <a href="#" class="admin-nav-link">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="workpace">
            <div>
                <div>
                    <h1 class="tittle-work">Staff </h1>
                </div>
                <form action="" class="nuevo" method="post">
                    <a href="./formAddEm.php" class="btn btn__nuevo">New</a>
                </form>
                <div class="container-card">

                <div class="card">

                    <img src="../media/hotel.png">

                    <div class="contenido-card">
                        <h3>Lucas</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour,</p>
                            <a href="#">Delete</a>
                    </div>
                </div>
                <div class="card">

                    <img src="../media/hotel.png">

                    <div class="contenido-card">
                        <h3>Juan</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour,</p>
                            <a href="#">Delete</a>
                    </div>
                </div>
                <div class="card">

                    <img src="../media/hotel.png">

                    <div class="contenido-card">
                        <h3>Jose</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour,</p>
                            <a href="#">Delete</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="workpace-room">
            <div>
                <div>
                    <h1 class="tittle-work">Room</h1>
                </div>
                <div class="container-card">

                <div class="card">

                    <img src="../media/hotel.png">

                    <div class="contenido-card">
                        <h3>Lucas</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour,</p>
                            <a href="#">Delete</a>
                    </div>
                </div>
                <div class="card">

                    <img src="../media/hotel.png">

                    <div class="contenido-card">
                        <h3>Juan</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour,</p>
                            <a href="#">Delete</a>
                    </div>
                </div>
                <div class="card">

                    <img src="../media/hotel.png">

                    <div class="contenido-card">
                        <h3>Jose</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour,</p>
                        <a href="#">Delete</a>
                    </div>
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