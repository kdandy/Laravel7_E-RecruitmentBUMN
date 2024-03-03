@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Uji Kesehatan
                    {{$ujiKesehatan->lowongan->berita->judul}}</h2>
            </div>
            <div class="d-flex">
                <a href="{{Route('ujiKesehatanFilter',['uuid'=>$ujiKesehatan->uuid])}}" class="btn btn-sm btn-danger mb-15 mr-2"><i class="fa fa-filter"></i> Filter Data</a>
                <a href="{{Route('ujiKesehatanCetak',['uuid'=>$ujiKesehatan->uuid])}}" class="btn btn-sm btn-danger mb-15 mr-2" target="_blank"><i class="fa fa-print"></i> Cetak Data</a>
                <button class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15" id="tambah">
                    <span class="icon-label"><i class="fa fa-plus"></i> </span><span class="btn-text">Tambah Data</span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="hk-row">
                    <div class="col-lg-12">

                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Tabel Data</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Peserta</th>
                                                    <th>Surat Keterangan Sehat </th>
                                                    <th>Surat Bebas Narkoba </th>
                                                    <th>Detak Jantung</th>
                                                    <th>Tes Lari</th>
                                                    <th>Keterangan Lulus</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $d)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$d->peserta->user->name}}</td>
                                                    <td><a href="{{asset('lampiran/suratKesehatan/'.$d->surat_kesehatan)}}" class="btn btn-sm btn-warning  mb-1" target="_blank"><span
                                                                class="icon-label"><i class="fa fa-download"></i>
                                                            </span><span class="btn-text"> </span></a></td>
                                                    <td><a href="{{asset('lampiran/suratNarkoba/'.$d->surat_kesehatan)}}" class="btn btn-sm btn-warning  mb-1" target="_blank"><span
                                                                class="icon-label"><i class="fa fa-download"></i>
                                                            </span><span class="btn-text"> </span></a></td>
                                                    <td>{{$d->detak_jantung}} Bpm</td>
                                                    <td>{{$d->tes_lari}} km/jam</td>
                                                    <td>
                                                        @if($d->status == 0 )
                                                        <p class="text-danger"> Tidak Lulus</p>
                                                        @else
                                                        <p class="text-success">Lulus</p> 
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{Route('ujiKesehatanRincianEdit',['uuid' => $d->uuid])}}"
                                                            class="btn btn-sm btn-outline-light  mb-1"><span
                                                                class="icon-label"><i class="fa fa-edit"></i>
                                                            </span><span class="btn-text"> </span></a>
                                                        <button class="btn btn-sm btn-outline-light" 
                                                            onclick="Hapus('{{$d->uuid}}')"> <i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Peserta</th>
                                                    <th>Surat Keterangan Sehat </th>
                                                    <th>Surat Bebas Narkoba </th>
                                                    <th>Detak Jantung</th>
                                                    <th>Tes Lari</th>
                                                    <th>Keterangan Lulus</th>
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


<!-- Modal forms-->
<div class="modal fade" id="exampleModalForms" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="status">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{Route('ujiKesehatanPesertaStore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="uji_kesehatan_id" value="{{$ujiKesehatan->id}}" id="">
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1"> Peserta</label>
                        <select name="peserta_id" id="" class="form-control" required>
                            <option value="">-- pilih peserta --</option>
                            @foreach($peserta as $d)
                            <option value="{{$d->id}}">{{$d->user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Surat Kesahatan dan Tidak Buta Warna</label>
                        <input type="file" class="form-control " id="Surat_kesehatan" name="surat_kesehatan">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Surat Bebas Narkoba</label>
                        <input type="file" class="form-control " id="Surat_Narkoba" name="surat_narkoba">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Detak Jantung (Bps)</label>
                        <input type="text" class="form-control " id="detak_jantung" name="detak_jantung" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Hasil Tes Lari (m/12 putaran) </label>
                        <input type="text" class="form-control " id="tes_lari" name="tes_lari" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="1">Lulus</option>
                            <option value="0">Tidak Lulus</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Tambah Data</button>
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
    
        function Hapus(uuid) {
			Swal.fire({
			title: 'Anda Yakin?',
			text: " Menghapus Data Uji kesehatan?  " ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("ujiKesehatanRincianDestroy",'')}}'; 
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection