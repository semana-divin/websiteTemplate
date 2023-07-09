<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="Logo.png" type="png">
    <title>noName</title>
<body>
    <header>
        <a href="index.php">
            <img src="Logo.png" alt="" width="80cm">
        </a>
        <ul>
            <li>
                <a href=""><b>Home</b></a>
            </li>
            <li>
                <a href="#about"><b>About us</b></a>
            </li>
            <li>
                <a href="#executives"><b>Our Team</b></a>
            </li>      
            <li>
                <a href=""><b>Contact us</b></a>
            </li>
        </ul>
        <div class="menu-toggle" onclick="list()">
            <i class="fas fa-bars"></i>
        </div>
    </header>
    <button><a href="index.html"><i class="bi bi-arrow-up" id="up-button"></i></a></button>
    <div class="main">
        <div class="wa">
            <p><b>OTTAWA!</b></p> 
        </div>
        <div class="boxes" id="about">
            <div class="box1"></div>            
            <div class="box2"></div>
            <div class="box3"></div>
        </div>
        <div class="list" id="executives">
            <div class="billionaire">
                <div class="dark">
                    <div id="ceo"><u>CEO</u><br><b>Eloge Chris</b></div>
                    <div class="socials">
                        <a href="https://www.instagram.com/youngbillionaire___/" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://twitter.com/ELOG33"><i class="bi bi-twitter" target="_blank"></i></a>
                        <a href=""><i class="bi bi-globe" target="_blank"></i></a>
                        <a href="mailto:elogechris4@gmail.com" target="_blank"><i class="bi bi-envelope-at"></i></a>
                    </div>
                </div>
            </div>
            <div class="brunette">
                <div class="dark1">
                    <div id="ceo"><u>Executive Assistant</u><br><b>Afrika Brunette</b></div>
                    <div class="socials1">
                        <a href="https://www.instagram.com/___b.r.u.n.e_a/" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter" target="_blank"></i></a>
                        <a href=""><i class="bi bi-globe" target="_blank"></i></a>
                        <a href="mailto:Afrikabrunette25@gmail.com" target="_blank"><i class="bi bi-envelope-at"></i></a>
                    </div>
                </div>
            </div>
            <div class="liliose">
                <div class="dark2">
                    <div id="ceo"><u>Head Of Finance</u><br><b>Gashugi Liliose</b></div>
                    <div class="socials2">
                        <a href="https://www.instagram.com/__liliose/" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter" target="_blank"></i></a>
                        <a href=""><i class="bi bi-globe" target="_blank"></i></a>
                        <a href="mailto:gashugililose@gmail.com" target="gmai.google.com"><i class="bi bi-envelope-at"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="down">
        <div class="members">
            <ul>
                <li>Hakizuwera Eloge <i class="bi bi-instagram"></i></li>
                <li>Afrika Brunette</li>
                <li>Gashugi Liliose</li>
                <li>Bagabo P. Blessing</li>
                <li>Semana Divin</li>
                <li>Mucyo Kelly</li>
            </ul>
        </div>
    </div>
</body>
</html>
<script>
    var menuToggle = document.querySelector('.menu-toggle');
    function list() {
        var navLinks = document.querySelector('ul');
        navLinks.classList.toggle('nav-active');
    }
    window.addEventListener("scroll", function () {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
    })

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
        });
    });
    });

</script>