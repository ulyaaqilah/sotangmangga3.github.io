<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="p-5">
                    <div class="text-center">
                    <h1 class="h4 900 mb-4" style="color: #d4a762;">Tambah Data Pelanggan</h1>
                    </div>
                    <form action="<?= route_to('pelanggantambahstore') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="form-group row">
                            <label for="exampleName" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_pelanggan" class="form-control" id="exampleName" placeholder="Masukkan Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="exampleEmail" placeholder="Masukkan Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="textarea" name="alamat" class="form-control" id="exampleInputPassword" placeholder="Masukkan Alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword" class="col-sm-2 col-form-label">Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomor_telepon" class="form-control" id="exampleInputPassword" placeholder="Masukkan Nomor Telepon">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Masukkan Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputFile" class="col-sm-2 col-form-label">Foto Profil</label>
                            <div class="col-sm-10">
                                <input style="border:none;" type="file" name="foto" class="form-control" id="exampleInputPassword" placeholder="Masukkan Foto">
                            </div>
                        </div>
                        </div>
                                    <td>
                                      <button class="col-sm-6 offset-sm-3 btn btn-primary" type="button" data-toggle="modal" data-target="#konfirmasiModal"style="background-color: #d4a762; border-color: #d4a762;">
                                        Tambahkan
                                      </button>
                                    </td>
                                    
                                    <div class="modal fade" id="konfirmasiModal" tabindex="-1" role="dialog" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi Penambahan Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            Apakah Anda yakin ingin menambahkan data ini?
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary" id="tambahkanBtn">Ya, Tambahkan</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                      </div>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>