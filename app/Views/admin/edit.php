<?= $this->extend('layout/templete_admin'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">

            <h2 class="my-4">Edit Data Film</h2>

            <form action="/admin/update/<?= $film['id_film']; ?>" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>
                <input type="hidden" name="sampulLama" value="<?= $film['gambar']; ?>">
                <input type="hidden" name="slug" value="<?= $film['slug']; ?>">
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= $film['judul']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('genre')) ? 'is-invalid' : ''; ?>" id="genre" name="genre" value="<?= $film['genre']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('genre'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="durasi" class="col-sm-2 col-form-label">Durasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('durasi')) ? 'is-invalid' : ''; ?>" id="durasi" name="durasi" value="<?= $film['durasi']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('durasi'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sinopsis" class="col-sm-2 col-form-label">Sinopsis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('sinopsis')) ? 'is-invalid' : ''; ?> " id="sinopsis" name="sinopsis" value="<?= $film['sinopsis']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('sinopsis'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rilis" class="col-sm-2 col-form-label">Rilis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('rilis')) ? 'is-invalid' : ''; ?> " id="rilis" name="rilis" value="<?= $film['rilis']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('rilis'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rating" class="col-sm-2 col-form-label">Rating</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('rating')) ? 'is-invalid' : ''; ?> " id="rating" name="rating" value="<?= $film['rating']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('rating'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input " id="gambar" name="gambar">
                            <label class="custom-file-label" for="gambar"><?= $film['gambar']; ?></label>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>