@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Hasil Akhir Lowongan {{$lowongan->berita->judul}}</h2>
            </div>
            <div class="d-flex">
                <a href="{{Route('hasilAkhirCetak',['uuid'=>$lowongan->uuid])}}" class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15 mr-5" target="_blank"> <i
                        class="fa fa-print"></i>Hasil Akhir </a>
                <button class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15" id="tambah"><span
                        class="icon-label"><i class="fa fa-plus"></i> </span><span class="btn-text">Tambah Data
                    </span></button>
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
                                                    <th>NIK</th>
                                                    <th>Nama</th>
                                                    <th>Nomor Hp</th>
                                                    <th>Email</th>
                                                    <th>Status </th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($hasil_akhir as $d)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$d->peserta->NIK}}</td>
                                                    <td>{{$d->peserta->user->name}}</td>
                                                    <td>{{$d->peserta->tlp_hp}}</td>
                                                    <td>{{$d->peserta->email}}</td>
                                                    <td>Lulus</td>
                                                    {{-- <td>{{$d->peserta->uji_wawancara_peserta->status}}</td> --}}
                                                    <td>
                                                        <a href="{{Route('hasilAkhirDestroy',['uuid' => $d->uuid])}}"
                                                            class="btn btn-sm btn-outline-light  mb-1"><span
                                                                class="icon-label"><i class="fa fa-trash"></i>
                                                            </span><span class="btn-text"> </span></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIK</th>
                                                    <th>Nama</th>
                                                    <th>Nomor Hp</th>
                                                    <th>Email</th>
                                                    <th>Status </th>
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
                <form action="{{Route('hasilAkhirStore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="lowongan_id" value="{{$lowongan->id}}" id="">
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Lowongan</label>
                        <select name="peserta_id" id="" class="form-control" required>
                            <option value="">-- pilih Pelamar --</option>
                            @foreach($data as $d)
                            <option value="{{$d->peserta_id}}">{{$d->peserta->user->name}}</option>
                            @endforeach

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
			text: " Menghapus Data Ujian Kesehatan '"  ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("ujiKesehatanDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection