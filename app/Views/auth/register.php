<?= $this->extend('layout/templete_login'); ?>
<?= $this->section('content'); ?>


<div class="box" style="width: 70%;">
    <p class="title">Create Your Account</p>
    <?php if (isset($validation)) : ?>
        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
    <?php endif; ?>
    <form action="/auth/save " method='POST'>

        <input type="text" name="nama" placeholder="Username" value="<?= set_value('nama') ?>">
        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
        <input type="password" name="password" placeholder="Password">

        <input type="submit" name="" value="Sign up">

        <p class="ques">
            Silahkan <a href="/auth/login">Click</a> apabila sudah mempunyai akun
        </p>
    </form>
</div>


<?= $this->endSection(); ?>