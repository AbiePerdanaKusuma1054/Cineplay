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
            </div>

            <div class="card">
                <div class="card-body register-card-body">
                    <h1>Pesan Ticket</h1>
                    <?php if (isset($validation)) : ?>
                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                    <?php endif; ?>
                    <form action="/user/save" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $session->get('nama'); ?>">

                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id='ttr' name="ttr" placeholder="theater">

                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="krs" name="krs" placeholder="kursi">

                        </div>

                        <div class="input-group mb-3">
                            <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Tanggal">

                        </div>

                        <div class="input-group mb-3">
                            <input type="number" class="form-control" id="jml" name="jml" placeholder="jumlah">

                        </div>
                        <div class="form-group">
                            <select autocomplete="off" autofocus="on" class="form-control custom-select " id="jenis" name="jenis">
                                <option selected disabled> Pilih metode pembayaran </option>
                                <option value="Dana">Dana</option>
                                <option value="M-Banking">M-Banking</option>
                                <option value="Gopay">Gopay</option>
                                <option value="OVO">OVO</option>
                            </select>
                        </div>
                        <div class="row">

                            <!-- /.col -->
                            <div class="col-4 center">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->
        </center>
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