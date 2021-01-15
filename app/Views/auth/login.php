<?= $this->extend('layout/templete_login'); ?>
<?= $this->section('content'); ?>


<div class="box" style="width : 60%;">

    <p class="title">Sign In to Cineplay</p>
    <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
    <?php endif; ?>
    <form action="/auth/masuk " method='POST'>
        <input type="email" name="email" placeholder="Email" value=" ">
        <input type="password" name="password" placeholder="Password" value=" ">

        <input type="submit" name="" value="Sign In">


        <p class="ques">
            Silahkan <a href="/auth/register">Click</a> untuk membuat akun
        </p>
    </form>
</div>


<?= $this->endSection(); ?>