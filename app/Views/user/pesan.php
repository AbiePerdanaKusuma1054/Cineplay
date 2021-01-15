<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    </style>
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
        <div class="harga">

            <div class="card mb-6" style="border: none; padding: 20px 30px 10px 30px; background: #0c0115;">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="/img/<?= $film['gambar']; ?>" alt="..." width="100%">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">

                            <h5 class="card-title"><?= $film['judul']; ?> </h5>
                            <p><i class="fa fa-clock-o" aria-hidden="true" style="color: white;"> <?= $film['durasi']; ?> </i></p>
                            <span class="badge badge-light">IMAX 2D</span>
                            <span class="badge badge-warning">R13+</span>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col " style="color: #ebebeb; padding: 0 15px;">
                        <br>
                        <h6>CIPLAZ LAMPUNG XXI</h6>
                        <div style="margin-top:10px;">
                            <div class="col-xs-7" style="text-align:left">20-12-2020</div>
                            <div class="col-xs-5" style="text-align:right"><span class="p_price">Rp. 65.000,</span></div>
                            <div class="clearfix" style="margin-bottom:10px; padding:0px"></div>
                            <p class="p_time">
                                <a class="btn btn-default btn-outline disabled div_schedule" style="color: #FFFFFF; background-color: #c0b1b1;font-size:14px; margin-left:3px; margin-top:15px">11:45</a>
                                <a class="btn btn-default btn-outline disabled div_schedule" style="color: #FFFFFF; background-color: #c0b1b1;font-size:14px; margin-left:3px; margin-top:15px">14:45</a>
                                <a class="btn btn-default btn-outline disabled div_schedule" style="color: #ffffff; background-color: #c0b1b1;font-size:14px; margin-left:3px; margin-top:15px">17:45</a>
                                <a class="btn btn-default btn-outline disabled div_schedule" style="color: #FFFFFF; background-color: #c0b1b1;font-size:14px; margin-left:3px; margin-top:15px">20:45</a>
                                <a class="btn btn-outline-light div_schedule" style="border-color: #ffffff; font-size:14px; margin-left:3px; margin-top:15px" href="/user/book">18:15</a>
                            </p>


                        </div>
                    </div>
                </div>
            </div>

        </div>










        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>