@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Edit Informasi Pelamar</h2>
            </div>
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="hk-row">
                    <div class="col-lg-12">

                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Edit Informasi Pelamar</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <form method="POST" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">NIK</label>
                                <input type="text" class="form-control" id="nik" placeholder="nik" name="nik">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Laki-laki</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" placeholder="tempat_lahir" name="tempat_lahir">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" placeholder="tanggal_lahir" name="tanggal_lahir">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Agama</label>
                                <select name="agama" id="agama" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Warga Negara</label>
                                <select name="agama" id="agama" class="form-control">
                                    <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
                                    <option value="Warga Negara Asing">Warga Negara Asing</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Alamat Sekarang</label>
                                <textarea name="alamat_sekarang" id="alamat_sekarang" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Alamat KTP</label>
                                <textarea name="alamat_ktp" id="alamat_ktp" class="form-control"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Telepon Rumah</label>
                                        <input type="text" class="form-control" id="telepon_rumah" placeholder="telepon_rumah" name="telepon_rumah">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Nomor Hp</label>
                                        <input type="text" class="form-control" id="no_hp" placeholder="no_hp" name="telepon_rumah">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Hobi</label>
                                <input type="text" class="form-control" id="hobi" placeholder="hobi" name="telepon_rumah">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Transportasi Sehari hari</label>
                                <select name="agama" id="agama" class="form-control">
                                    <option value="Roda 2">Roda 2</option>
                                    <option value="Roda 4">Roda 4</option>
                                    <option value="Angkutan Umum">Angkutan Umum</option>
                                    <option value="Sepeda">Sepeda</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">E-mail</label>
                                <input type="text" class="form-control" id="email" placeholder="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Pas Foto</label>
                                <input type="file" class="form-control" id="foto"  name="foto">
                            </div>
                           <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Ijazah Terakhir</label>
                                        <select name="agama" id="agama" class="form-control">
                                            <option value="SMA">SMA</option>
                                            <option value="SMK">SMK</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Scan Ijazah</label>
                                        <input type="file" class="form-control" id="ijazah"  name="ijazah">
                                    </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Tahun Lulus</label>
                                        <input type="number" class="form-control" id="tahun_lulus"  name="tahun_lulus">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Nama Sekolah / Universitas</label>
                                        <input type="text" class="form-control" id="ipk"  name="lembaga" placeholder="Nama Lembaga Pendidikan">
                                    </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Jurusan</label>
                                        <input type="text" class="form-control" id="jurusan"  name="jurusan">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">IPK / Rata-Rata UN</label>
                                        <input type="text" class="form-control" id="ipk"  name="ipk">
                                    </div>
                               </div>
                           </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i>
                                                    Ubah Data</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>
    <!-- /Container -->

</div>
<!-- /Main Content -->


@endsection
@section('scripts')
<script>
    $("#tambah").click(function(){
            $('#status').text('Tambah Data');
            $('#exampleModalForms').modal('show');
        });
</script>
@endsection