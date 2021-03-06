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
                <center>

                    <div class="card" style="width: 18rem;">

                        <div class="card-body">
                            <p class="card-text"><b>FILM : </b></p>
                            <p class="card-text"><b>WAKTU : </b></p>
                            <p class="card-text"><b>JUMLAH : </b></p>
                            <p class="card-text"><b>KURSI : </b></p>
                            <p class="card-text"><b>HARGA : </b></p>
                        </div>
                    </div>
                </center>
            </div>

        </div>





        <button onclick="window.print()">Download Ticket</button>




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