<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://cdn1.iconfinder.com/data/icons/makinterang-musik/24/35._Circle_multimedia_music_play-512.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/style.css">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="back">
        <ul>
            <li>
                <p class="brand">Cineplay</p>
            </li>
            <li><a class="active" href="/dashboard">Home</a></li>
            <li><a href="#movie">Movies</a></li>
            <li><a href="#contact">Pricing</a></li>
            <li><a href="#about">Up Coming</a></li>
            <li style="float: right;"><a href="/auth/logout"><img src="img/logout.png" alt="">
                    <span>Log Out</span></a></li>
        </ul>

        <div class="carousel">
            <div class="wall">
                <img src="img/top.png" class="top">
                <div class="slide">
                    <div class="ss">
                        <img class="mySlides" src="https://i.pinimg.com/originals/96/c4/cf/96c4cfec3cee3aacf55c297e6b8a9893.png">
                        <img class="mySlides" src="https://i.pinimg.com/originals/23/05/1a/23051a285aea13b7496749d117df53e7.png">
                        <img class="mySlides" src="https://image.slidesharecdn.com/godwantsyourlifetobeastoryworthtellingkey09-140119223509-phpapp01/95/this-church-matters-because-we-believe-god-wants-your-life-to-be-a-story-worth-telling-4-638.jpg?cb=1390222466">
                        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="list" id="movie">

            <?php foreach ($film as $m) : ?>

                <a href="/movie/<?= $m['slug']; ?>" class="to">
                    <div class="frame">

                        <img class="poster" src="/img/<?= $m['gambar']; ?>">
                        <div class="val">
                            <p class="judul"><?= $m['judul']; ?></p>
                            <?= $m['rating']; ?>
                        </div>

                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="line">
        </div>
        <div class="footer">
            <div class="contex">
                <p class="brandfoot">
                    Cineplay
                </p>
                <p class="dev">Developed by @AMBIYAH</p>
            </div>
        </div>
    </div>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-white", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-white";
        }
    </script>
</body>

</html>