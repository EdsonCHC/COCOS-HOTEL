<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Admin</title>
    <link rel="stylesheet" href="../styles/Styles.css">
    <link rel="shortcut icon" href="../media/hotel.png" type="image/x-icon">
</head>

<body>
    <form id="form-log-admin" action="" method="post">
        <section class="form-sect-log">
            <div>
                <div class="tittle-log-admin">
                    <h1>Log In Admin</h1>
                </div>      
                <div class="inp-log-admin">
                    <label for="">
                        <input type="text" id="name-admin" placeholder="Name Administrator" name="nameAdmin" pattern="[a-zA-Z]+" required>
                        <div id="err1" class=""></div>
                    </label>
                    <label for="">
                        <input type="password" id="pass-admin" placeholder="Password" name="passAdmin" pattern="[A-Za-z]+" required>
                        <div id="" class=""></div>
                    </label>
                    <input type="submit" value="Log In" id="btn-log-admin">
                </div>         
            </div>
        </section>
    </form>    
</body>

</html>