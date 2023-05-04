<footer>
    <p>
        <i class="fa-sharp fa-regular fa-copyright"></i>
        <span id="year"></span>
        <span>Cocos Hotel All rights reserved </span>
    </p>
    <p>
    <span id="icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
        </span>
    </p>
</footer>
<!--Scrip para el año-->
<script>
    let year = document.getElementById("year");
    var y = new Date().getFullYear();
    year.innerHTML = y;
</script>
<!--Script para iconos-->
<script src="https://kit.fontawesome.com/7bcd40cb83.js" crossorigin="anonymous"></script>