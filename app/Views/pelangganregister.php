<?= $this->extend('admin/layout/link') ?>
<?= $this->section('auth') ?>
<div class="container">
<div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="card o-hidden border-0 shadow-lg my-4">
            <div class="card-body p-0">
                <div class="p-5">
                <div class="text-center">
    <h1 class="display-5 mb-4" style="color: #d4a762;">Registrasi!</h1>
</div>
                    <form action="<?php echo base_url('/simpanregister')?>" method="POST" class="user" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Masukkan Nama Anda">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukkan Alamat Anda">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Nomor Telepon Anda">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="uil uil-at"></i></span>
        </div>
        <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="email" placeholder=" Masukkan Email Anda">
    </div>
</div>
<div class="form-group">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="uil uil-lock-alt"></i></span>
        </div>
        <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder=" Massukkan password">
    </div>
</div>
<div class="form-group row">
                                      <label for="Masukkan Foto " class="col-sm-6 col-form-label">Masukkan Foto </label>
                                      <div class="col-sm-6">
                                        <input class="input-xxlarge" type="file" name="foto_barang" accept="image/png, image/jpeg" onchange="loadFile(event)" required="">
                                        
                                      </div>
                                    </div>

                        <button class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="save" style="background-color: #d4a762; border-color: #d4a762;">
                            Register
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?= route_to('pelangganlogin') ?>">Apakah Ada Sudah Mempunyai akun? Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>