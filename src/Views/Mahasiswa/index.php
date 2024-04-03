<div class="container mt-5 p-5 h-75">

    <div class="row">
        <div class="col-sm-8 col-12">
            <h3 class="mb-3">Daftar Mahasiswa</h3>

            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Jurusan</th>
                        <th>Umur</th>
                    </tr>
                </thead>
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <tbody>
                        <tr>
                            <td><?= $mhs['nama'] ?></td>
                            <td><?= $mhs['npm'] ?></td>
                            <td><?= $mhs['jurusan'] ?></td>
                            <td><?= $mhs['umur'] ?></td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
    </div>

</div>