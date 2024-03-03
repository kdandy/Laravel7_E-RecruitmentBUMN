@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Detail Pelamar</h2>
            </div>
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="hk-row">
                    <div class="col-lg-12">

                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="hk-sec-title">Detail Pelamar</h5>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{Route('biodataCetak',['uuid'=>$data->uuid])}}"
                                        class="btn btn-sm btn-danger mb-15" target="_blank"><i class="fa fa-print"></i>
                                        Cetak Biodata</a>
                                    <button class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15"
                                        id="tambah"><span class="icon-label"><i class="fa fa-check-circle"></i>
                                        </span><span class="btn-text">Verifikasi</span></button>
                                    <a href="{{Route('beritaIndex')}}" class="btn btn-sm btn-secondary mb-15"><i
                                            class="fa fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <div class="row">
                                            <div class="col-md">
                                                <table>
                                                    <tr height="30px !important;">
                                                        <td width="50%">Nama</td>
                                                        <td>: {{$data->user->name}}</td>
                                                    </tr>
                                                    <tr height="30px !important;">
                                                        <td>Nik</td>
                                                        <td>: {{$data->NIK}}</td>
                                                    </tr>
                                                    <tr height="30px !important;">
                                                        <td>Jenis Kelamin</td>
                                                        <td>:
                                                            @if($data->jk == 1)
                                                            Laki-laki
                                                            @else
                                                            Perempuan
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr height="30px !important;">
                                                        <td>Tempat, Tanggal lahir</td>
                                                        <td>: {{$data->tempat_lahir}},
                                                            {{carbon\carbon::parse($data->tgl_lahir)->translatedFormat('d F Y')}}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md">
                                                <table width="100%">
                                                    <tr height="30px !important;">
                                                        <td width="40%">Agama</td>
                                                        <td>: {{$data->agama}}</td>
                                                    </tr>
                                                    <tr height="30px !important;">
                                                        <td>Warga Negara</td>
                                                        <td>: {{$data->warga_negara}}</td>
                                                    </tr>
                                                    <tr height="30px !important;">
                                                        <td>Alamat KTP</td>
                                                        <td>: {{$data->alamat_ktp}}</td>
                                                    </tr>
                                                    <tr height="30px !important;">
                                                        <td>Alamat Sekarang</td>
                                                        <td>: {{$data->alamat_sekarang}}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md">
                                                <h5 class="hk-sec-title">Kontak</h5>
                                                <table width="100%">
                                                    <tr height="30px !important;">
                                                        <td width="40%">Nomor Tlp Rumah</td>
                                                        <td>:
                                                            @if(!$data->tlp_rumah)
                                                            -
                                                            @else
                                                            {{$data->tlp_rumah}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr height="30px !important;">
                                                        <td>Nomor hp</td>
                                                        <td>: {{$data->tlp_hp}}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md">
                                                <table width="100%">
                                                    <tr height="30px !important;">
                                                        <td width="40%">email</td>
                                                        <td>: {{$data->email}}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md">
                                                <h5 class="hk-sec-title">Pendidikan</h5>
                                                <table width="100%">
                                                    <tr height="30px !important;">
                                                        <td width="40%">Pendidikan Terakhir</td>
                                                        <td>: {{$data->pendidikan->nama}}</td>
                                                    </tr>
                                                    <tr height="30px !important;">
                                                        <td>Nama Sekolah / Universitas</td>
                                                        <td>: {{$data->lembaga}}</td>
                                                    </tr>
                                                    <tr height="30px !important;">
                                                        <td>jurusan / Prodi</td>
                                                        <td>: {{$data->jurusan}}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md">
                                                <table width="100%">
                                                    <tr height="30px !important;">
                                                        <td width="40%">Tahun lulus</td>
                                                        <td>: {{$data->tahun_lulus}}</td>
                                                    </tr>
                                                    <tr height="30px !important;">
                                                        <td width="40%">IPK / Rata-rata UN</td>
                                                        <td>: {{$data->ipk}}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md">
                                                <h5 class="hk-sec-title">file Lampiran</h5>
                                                <table width="100%">
                                                    <tr height="30px !important;">
                                                        <td width="40%">Pas Foto</td>
                                                        <td>:
                                                            <a href="{{asset('images/user/'. $data->user->foto)}}"
                                                                class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mr-15 mb-15"
                                                                target="_blank"><span class="icon-label"><i
                                                                        class="fa fa-paperclip"></i>
                                                                </span><span class="btn-text">Foto</span></a>
                                                        </td>
                                                    </tr>
                                                    <tr height="30px !important;">
                                                        <td width="40%">Scan Ijazah terakhir</td>
                                                        <td>:
                                                            <a href="{{asset('lampiran/ijazah/'. $data->user->lampiran->doc_ijazah)}}"
                                                                class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mr-15 mb-15"
                                                                target="_blank"><span class="icon-label"><i
                                                                        class="fa fa-paperclip"></i>
                                                                </span><span class="btn-text">Scan
                                                                    Ijazah</span></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md">
                                                <h5 class="hk-sec-title">Status Lamaran</h5>
                                                <table width="100%">
                                                    <tr height="30px !important;">
                                                        <td width="40%">Tanggal Upload</td>
                                                        <td>:
                                                            {{carbon\carbon::parse($data->created_at)->translatedFormat('d F Y')}}
                                                        </td>
                                                    </tr>
                                                    <tr height="30px !important;">
                                                        <td width="40%">Status Lamaran</td>
                                                        <td>:
                                                            @if($data->user->status == 0)
                                                            <span class="text-warning">PENDING</span>
                                                            @elseif($data->user->status == 1)
                                                            <span class="text-success">VERIFIKASI</span>
                                                            @else
                                                            <span class="text-danger">DITOLAK</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
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


<!-- Modal forms-->
<div class="modal fade" id="exampleModalForms" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="status">Modal Verifikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{Route('verifPeserta',['uuid'=>$data->user->uuid])}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="0">Pending</option>
                            <option value="1">Diterima</option>
                            <option value="2">Ditolak</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Simpan
                            Verifikasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $("#tambah").click(function(){
            $('#status').text('Tambah Data');
            $('#exampleModalForms').modal('show');
        });
</script>
@endsection