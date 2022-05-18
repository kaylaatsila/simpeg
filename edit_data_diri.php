<?php

?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Data Pegawai</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>

    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="stat_user" class="col-sm-3 col-form-label">Status User</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="stat_user" id="stat_user" required autocomplete="off" autofocus>
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Non Aktif</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                    <div class="col-sm-9">
                        <input type="hidden" name="nipAsli" value="">
                        <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP" value="" required autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_pegawai" class="col-sm-3 col-form-label">Nama Pegawai</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" value="" placeholder="Nama Pegawai" required autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-sm-3 col-form-label">Tempat/Tanggal Lahir</label>
                    <div class="col">
                        <input type="text" class="form-control" name="tempat_lahir" value="" placeholder="Tempat Lahir" required autocomplete="off">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" name="tgl_lahir" value="" placeholder="Tanggal Lahir" required>
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-9">
                            <div class="form-check d-inline mr-3">
                                <input class="form-check-input" type="radio" name="jk" id="jk1" value="laki-laki">
                                <label class="form-check-label" for="jk1">
                            Laki-laki
                        </label>
                            </div>
                            <div class="form-check d-inline">
                                <input class="form-check-input" type="radio" name="jk" id="jk2" value="perempuan">
                                <label class="form-check-label" for="jk2">
                            Perempuan
                        </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="no_hp" class="col-sm-3 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="no_hp" id="no_hp" value="" placeholder="Nomor Handphone" required autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="agama" id="agama" value="" placeholder="Agama" required autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" value="" required autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea name="alamat" class="form-control" id="alamat" cols="10" rows="3" required autocomplete="off"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stat_pegawai" class="col-sm-3 col-form-label">Status Kepegawaian</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="stat_pegawai" id="stat_pegawai" required autocomplete="off">
                        <option value="pns">PNS</option>
                        <option value="honor">Honor</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nip" class="col-sm-3 col-form-label">Pas Photo</label>
                    <div class="col-sm-9">
                        <a href="" target="_blank" class="text-decoration-none">
                            <img src="" alt="Foto Pegawai" class="img-fluid mb-3" width="60px" height="70px">
                        </a>
                        <input type="hidden" name="foto_lama" value=">
                    <div class=" custom-file ">
                        <input type="file " class="custom-file-input " id="customFile " name="foto ">
                        <label class="custom-file-label " for="customFile ">Tentukan file</label>
                    </div>
                    <span class="text-info ">* Maksimal Ukuran File 1 MB</span>
                </div>
            </div>

        <!-- disini tanda tempat form -->
    </div>
    <div class="card-footer ">
        <button type="submit " class="btn btn-success float-right "><i class="fas fa-fw fa-save "></i> Simpan</button>
        <a href=" " class="btn btn-warning "><i class="fas fa-fw fa-chevron-left "></i> Kembali</a>
    </div>
    </form>
</div>