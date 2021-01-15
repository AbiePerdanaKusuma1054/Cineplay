<?= $this->extend('layout/templete_admin'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">

            <h2 class="my-4">Tambah Data Film</h2>

            <form action="/admin/save" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('genre')) ? 'is-invalid' : ''; ?>" id="genre" name="genre">
                        <div class="invalid-feedback">
                            <?= $validation->getError('genre'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="durasi" class="col-sm-2 col-form-label">Durasi (menit) </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('durasi')) ? 'is-invalid' : ''; ?>" id="durasi" name="durasi">
                        <div class="invalid-feedback">
                            <?= $validation->getError('durasi'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sinopsis" class="col-sm-2 col-form-label">Sinopsis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('sinopsis')) ? 'is-invalid' : ''; ?> " id="sinopsis" name="sinopsis">
                        <div class="invalid-feedback">
                            <?= $validation->getError('sinopsis'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rilis" class="col-sm-2 col-form-label">Tahun Rilis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('rilis')) ? 'is-invalid' : ''; ?> " id="rilis" name="rilis">
                        <div class="invalid-feedback">
                            <?= $validation->getError('rilis'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rating" class="col-sm-2 col-form-label">Rating Film</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('rating')) ? 'is-invalid' : ''; ?> " id="rating" name="rating">
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
                            <label class="custom-file-label" for="gaambar">Pilih Gambar</label>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Film</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>