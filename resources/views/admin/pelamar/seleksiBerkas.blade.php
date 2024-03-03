@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Informasi Pelamar Lulus Pemberkasan</h2>
            </div>
            <div class="d-flex">
            </div>
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="hk-row">
                    <div class="col-lg-12">

                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Data Table</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Posisi</th>
                                                    <th>IPK minimal</th>
                                                    <th>Pendidikan Terakhir</th>
                                                    <th>Tanggal Pendaftaran</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $d)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$d->berita->judul}}</td>
                                                    <td> @foreach(collect($d->posisi) as $p)
                                                        {{$p}} <br>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @if(isset($d->ipk_min))
                                                        {{$d->ipk_min}}
                                                        @else
                                                        -
                                                        @endif
                                                    </td>
                                                    <td>{{$d->pendidikan_terakhir->nama}}</td>
                                                    <td>{{carbon\carbon::parse($d->tgl_mulai)->translatedFormat('d F Y')}}
                                                        -
                                                        {{carbon\carbon::parse($d->tgl_selesai)->translatedFormat('d F Y')}}
                                                    </td>
                                                    <td>
                                                        @if($d->status == 1)
                                                        <p class="text-info">Sedang Berlangsung</p>
                                                        @else
                                                        <p class="text-success">Sudah Selesai</p>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{Route('seleksiBerkasShow',['uuid'=>$d->uuid])}}"
                                                            class="btn btn-sm btn-outline-light  mb-1"><span
                                                                class="icon-label"><i class="fa fa-info-circle"></i>
                                                                Detail Pelamar
                                                            </span><span class="btn-text"> </span></a>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Posisi</th>
                                                    <th>IPK minimal</th>
                                                    <th>Pendidikan Terakhir</th>
                                                    <th>Tanggal Pendaftaran</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                        </table>
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
</script>
@endsection