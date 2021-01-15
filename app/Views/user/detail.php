<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    </style>
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
            <li><a href="#news">Movies</a></li>
            <li><a href="#contact">Pricing</a></li>
            <li><a href="#about">Up Coming</a></li>
            <li style="float: right;"><a href="/auth/logout"><img src="img/logout.png" alt="">
                    <span>Log Out</span></a></li>
        </ul>
        <div class="detail">
            <div class="main-content main-detail" style="width: 100%;">
                <div class="row">
                    <div class="col-4" style="padding-right: 5px;">
                        <div class="poster-box">
                            <a href="#popup-poster" data-lightbox="inline" style="padding:0px;">
                                <img src="/img/<?= $film['gambar']; ?>" />
                            </a>
                            <form action="/user/pesan/<?= $film['slug']; ?>">
                                <button type="submit" class="button_buy">Buy Ticket</button>
                            </form>

                        </div>
                    </div>

                    <div class="col-8" style="padding-left: 5%; padding-right: 0;">
                        <div class="desc-box">
                            <h2><?= $film['judul']; ?></h2>
                            <div class="row">
                                <div class="col">
                                    <div class="desc-movie">
                                        <div class="card">
                                            <p class="card-text"><b>Jenis Film : </b><?= $film['genre']; ?></p>
                                            <p class="card-text"><b>Durasi Film : </b><?= $film['durasi']; ?></p>
                                            <p class="card-text"><b>Tahun Rilis : </b><?= $film['rilis']; ?></p>
                                            <p class="card-text"><b>Rate : </b><img src="/img/rate.png" style="width: 18px; height: 18px;">
                                                <?= $film['rating']; ?>
                                                <span class="fullrate">/ 10 </span>
                                            </p>


                                        </div>
                                    </div>
                                </div>

                                <div class="desc-synopsis">
                                    <h4>SINOPSIS</h4>
                                    <p><?= $film['sinopsis']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>









        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>