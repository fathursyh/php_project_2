<div class="container mt-5 p-3 h-75">

    <div class="row">
        <div class="col-sm-4 col-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-2 tambahData" data-bs-toggle="modal" data-bs-target="#formModal">
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
                    <li class="list-group-item">
                        <?= $mhs['nama'] ?>
                        <a class="badge bg-danger text-white float-end ms-1" href="<?= DIREKTORI ?>/mahasiswa/hapus/<?= $mhs['npm'] ?>" onclick="return confirm('hapus data?')">Delete</a>
                        <a class="badge bg-success text-white float-end ms-1 ubahData" href="<?= DIREKTORI ?>/mahasiswa/ubah/<?= $mhs['npm'] ?>" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['npm']; ?>">Edit</a>
                        <a class="badge bg-primary text-white float-end ms-1" href="<?= DIREKTORI ?>/mahasiswa/detail/<?= $mhs['npm'] ?>">Detail</a>
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

                <form action="<?= DIREKTORI ?>/mahasiswa/tambah" method="post" name="mahasiswaForm" onsubmit=" return Validate.validate('mahasiswaForm', 'npm')" autocomplete="off">
                    <input type="hidden" name="id" id="id">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="nama" aria-label="nama" aria-describedby="basic-addon1" name="nama" id="nama" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="npm" aria-label="npm" aria-describedby="basic-addon1" name="npm" id="npm" required pattern="^(0)(6)(5)(1)[0-9]{5}$" oninvalid="setCustomValidity('Masukan NPM dengan benar! (0651XXXX)')" maxlength="9">
                    </div>
                    <div class="input-group mb-3">
                        <select id="jurusan" name="jurusan" placeholder="jurusan" required class="form-select">
                            <option value="" disabled selected>-- pilih jurusan --</option>
                            <?php foreach ($data['form'] as $selections) : ?>
                            <option value="<?= $selections ?>"><?= $selections ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="umur" aria-label="umur" aria-describedby="basic-addon1" name="umur" id="umur" required>
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