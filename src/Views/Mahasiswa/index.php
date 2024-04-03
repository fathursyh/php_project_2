<div class="container mt-5 p-3 h-75">

    <div class="row">
        <div class="col-sm-4 col-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>

            <div class="row">
                <div class="col-lg-12 ms-auto">
                    <?php
                    use App\Core\Flasher;
                    Flasher::flash();
                    ?>
                </div>
            </div>

            <h3 class="mb-3">Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama'] ?>
                        <a class="badge bg-info text-white" href="<?= DIREKTORI ?>/mahasiswa/detail/<?= $mhs['npm'] ?>">More ></a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>



<!-- MODAL -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">
                    Tambah Data Mahasiswa
                </h5>
            </div>
            <div class="modal-body">

                <form action="<?= DIREKTORI ?>/mahasiswa/tambah" method="post">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="nama" aria-label="nama" aria-describedby="basic-addon1" name="nama">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="npm" aria-label="npm" aria-describedby="basic-addon1" name="npm">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="jurusan" aria-label="jurusan" aria-describedby="basic-addon1" name="jurusan">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="umur" aria-label="umur" aria-describedby="basic-addon1" name="umur">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>