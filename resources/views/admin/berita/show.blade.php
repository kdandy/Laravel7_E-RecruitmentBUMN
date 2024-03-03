@extends('layouts.main')

@section('content')
 <!-- Main Content -->
 <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
				<!-- Title -->
				<div class="hk-pg-header align-items-top">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Detail Berita</h2>
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
                                    <h5 class="hk-sec-title">Detail Berita</h5>
                                    </div>
                                    <div class="col-md-6 text-right">
                                    <a href="{{Route('beritaIndex')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
                                    </div>
                                </div>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <img src="{{asset('images/berita/'. $data->foto)}}" alt="" width="100%">
                                        <hr>
                                        <br>
                                        <h2>{{$data->judul}}</h2>
                                        <small>{{$data->created_at}}</small>
                                        <br>
                                        <br>
                                        <p class="text-justify">{!! $data->isi !!}</p> 
                                        <br>
                                        <table>
                                            <tr>
                                                <td width="50%">Posisi</td>
                                                <td>: @foreach(collect($data->lowongan->posisi) as $p)
                                                      {{$p}},
                                                      @endforeach</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Pendaftaran</td>
                                                <td>: {{carbon\carbon::parse($data->tgl_mulai)->translatedFormat('d F Y')}} - {{carbon\carbon::parse($data->tgl_selesai)->translatedFormat('d F Y')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Pendidikan Minimal</td>
                                                <td>: {{$data->lowongan->pendidikan_terakhir->nama}}</td> 
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:  @if($data->lowongan->status == 1)
                                                            Sedang Berlangsung
                                                        @else
                                                     Sudah Selesai
                                                        @endif</td>
                                            </tr>
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
       $("#tambah").click(function(){
            $('#status').text('Tambah Data');
            $('#exampleModalForms').modal('show');
        });
    </script>
@endsection