@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Informasi Lowongan</h2>
            </div>
            <div class="d-flex">
                <a href="{{Route('beritaAdd')}}" class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15"><span
                        class="icon-label"><i class="fa fa-plus"></i> </span><span class="btn-text">Tambah Data
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
                                                    <th>Judul</th>
                                                    <th>tanggal Pendaftaran</th>
                                                    <th>posisi</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $d)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$d->judul}}</td>
                                                    <td>{{carbon\carbon::parse($d->lowongan->tgl_mulai)->translatedFormat('d F Y')}}
                                                        -
                                                        {{carbon\carbon::parse($d->lowongan->tgl_selesai)->translatedFormat('d F Y')}}
                                                    </td>
                                                    <td>
                                                      @foreach(collect($d->lowongan->posisi) as $p)
                                                      {{$p}} <br>
                                                      @endforeach
                                                    </td>
                                                    <td>
                                                        @if($d->status == 0)
                                                            <p class="text-info">Belum Berlangsung</p>
                                                        @elseif($d->status == 1)
                                                            <p class="text-success">Sedang Berlangsung</p>
                                                        @else
                                                        <p class="text-danger">Sudah Ditutup</p>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{Route('beritaShow',['uuid' => $d->uuid])}}"
                                                            class="btn btn-sm btn-outline-light  mb-1"><span
                                                                class="icon-label"><i class="fa fa-eye"></i>
                                                            </span><span class="btn-text"> </span></a>
                                                        <a href="{{Route('beritaEdit',['uuid' => $d->uuid])}}"
                                                            class="btn btn-sm btn-outline-light  mb-1"><span
                                                                class="icon-label"><i class="fa fa-edit"></i>
                                                            </span><span class="btn-text"> </span></a>
                                                            <button class="btn btn-sm btn-outline-light" onclick="Hapus('{{$d->uuid}}','{{$d->judul}}')"> <i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>tanggal Pendaftaran</th>
                                                    <th>posisi</th>
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
     function Hapus(uuid, judul) {
			Swal.fire({
			title: 'Anda Yakin?',
			text: " Menghapus Data Lowongan '" + judul ,
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("beritaDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;
			}
		})
        }
</script>
@endsection
