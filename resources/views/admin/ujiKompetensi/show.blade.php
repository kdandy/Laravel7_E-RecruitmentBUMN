@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Uji Kompetensi</h2>
            </div>
            <div class="d-flex">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="hk-row">
                    <div class="col-lg-12">

                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-md">
                                    <h5 class="hk-sec-title">Tabel Data</h5>
                                </div>
                                <div class="col-md text-right">
                                    <a href="{{Route('ujiKompetensiFilter',['uuid'=>$data->uuid])}}" class="btn btn-sm btn-danger mb-15"><i class="fa fa-filter"></i> Filter Data</a>
                                    <a href="{{Route('ujiKompetensiCetak',['uuid'=>$data->uuid])}}" class="btn btn-sm btn-danger mb-15" target="_blank"><i class="fa fa-print"></i> Cetak Data</a>
                                </div>
                            </div>
                            <br> 
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NIK</th>
                                                    <th>Nilai</th>
                                                    <th>Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($peserta as $d)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$d->peserta->user->name}}</td>
                                                    <td>{{$d->peserta->NIK}}</td>
                                                    <td>{{$d->nilai}}</td>
                                                    <td>
                                                        @if($d->nilai >= 75)
                                                        Lulus
                                                        @else
                                                        Tidak Lulus
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NIK</th>
                                                    <th>Nilai</th>
                                                    <th>Keterangan</th>
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