<?= $this->extend('layout/templete_admin'); ?>
<?= $this->section('content'); ?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- End of Topbar -->

        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="mt-2">Data FIlm Cineplay</h3>

                    <a href="/admin/create" class="btn btn-primary mb-3">Tambah Film</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th hidden></th>
                                <th scope="col">No</th>
                                <th scope="col">Sampul</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Durasi</th>
                                <th scope="col">Tahun Rilis</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($film as $m) : ?>
                                <tr>
                                    <td hidden><?= $m['id_film']; ?></td>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><img src="/img/<?= $m['gambar']; ?>" alt="" class="sampul"></td>
                                    <td><?= $m['judul']; ?></td>
                                    <td><?= $m['genre']; ?></td>
                                    <td><?= $m['durasi']; ?></td>
                                    <td><?= $m['rilis']; ?></td>
                                    <td>
                                        <a href="/admin/edit/<?= $m['slug']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                        <form action="/admin/<?= $m['id_film']; ?> " method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?');"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>