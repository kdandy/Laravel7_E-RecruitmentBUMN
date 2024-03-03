@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Pelamar Pada Lowongan {{$lowongan->berita->judul}}
                </h2>
            </div>
            <div class="d-flex text-right">
            <a href="{{Route('pelamarFilter',['uuid'=>$lowongan->uuid])}}" class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mr-15 mb-15"><span
                        class="icon-label"><i class="fa fa-filter"></i> </span><span class="btn-text">Filter Data
                    </span></a>
                <a href="{{Route('pelamarCetak',['uuid'=>$lowongan->uuid])}}" class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mr-15 mb-15" target="_blank"><span
                        class="icon-label"><i class="fa fa-print"></i> </span><span class="btn-text">Cetak Data
                    </span></a>
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
                                                    <th>NIK</th>
                                                    <th>Nama</th>
                                                    <th>Tempat Tanggal Lahir</th>
                                                    <th>Nomor Hp</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $d)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$d->NIK}}</td>
                                                    <td>{{$d->user->name}}</td>
                                                    <td>{{$d->tempat_lahir}}, {{$d->tgl_lahir}}</td>
                                                    <td>{{$d->tlp_hp}}</td>
                                                    <td>{{$d->email}}</td>
                                                    <td>
                                                        @if($d->user->status == 0)
                                                        <p class="text-danger">Belum diverifikasi</p>
                                                        @else
                                                        <p class="text-primary">Sudah diverifikasi</p>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{Route('pelamarShow',['uuid' => $d->uuid])}}"
                                                            class="btn btn-sm btn-outline-light  mb-1"><span
                                                                class="icon-label"><i class="fa fa-info-circle"></i>
                                                            </span><span class="btn-text"> </span></a>
                                                        <!-- <a href="{{Route('pelamarEdit','xaxa')}}"
                                                            class="btn btn-sm btn-outline-light  mb-1"><span
                                                                class="icon-label"><i class="fa fa-edit"></i>
                                                            </span><span class="btn-text"> </span></a> -->
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIK</th>
                                                    <th>Nama</th>
                                                    <th>Tempat Tanggal Lahir</th>
                                                    <th>Nomor Hp</th>
                                                    <th>Email</th>
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
