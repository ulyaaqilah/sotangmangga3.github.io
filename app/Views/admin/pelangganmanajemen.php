<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Pelanggan</h6>
        </div>
        <div id="successAlert" class="alert alert-success" role="alert" style="display: none;">
                        Data berhasil ditambahkan!
                      </div>
                      <div  id="alertH" class="alert alert-danger alertH" role="alert" style="display: none;">
                        Data berhasil dihapus!
                    </div>
        <div class="card-body">
            <div class="text-weight mb-3">
                <form action="<?= route_to('pelanggantambah') ?>">
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i> Tambah Data
                    </button>
                </form>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Foto</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Foto</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($pelanggan as $p) : ?>
                                    <tr>
                                        <td><?= $p['nama_pelanggan']; ?></td>
                                        <td> <img src="<?= base_url('public/pelanggan/img/' . $p['foto']); ?>" alt="Foto Profil" style="max-width: 100px;"></td>
                                        <td><?= $p['email']; ?></td>
                                        <td><?= $p['alamat']; ?></td>
                                        <td><?= $p['nomor_telepon']; ?></td>
                                        <td>
                                            <a href="<?= site_url('admin/pelangganedit/' . $p['id_pelanggan']); ?>" class="btn btn-warning">Edit</a>
                                            <!-- Tombol untuk membuka modal -->
                                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal<?= $p['id_pelanggan']; ?>">Delete</a>
                                            <!-- Modal Konfirmasi Delete -->
                                            <div class="modal fade" id="confirmDeleteModal<?= $p['id_pelanggan']; ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel<?= $p['id_pelanggan']; ?>" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="confirmDeleteModalLabel<?= $p['id_pelanggan']; ?>">Konfirmasi Penghapusan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus pelanggan ini?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <a href="<?= site_url('admin/pelanggandestroy/' . $p['id_pelanggan']); ?>" class="btn btn-danger">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection() ?>