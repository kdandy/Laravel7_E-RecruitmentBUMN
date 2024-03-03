@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Detail Soal</h2>
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
                                    <h5 class="hk-sec-title">Detail Soal</h5>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{Route('soalIndex')}}" class="btn btn-sm btn-secondary"><i
                                            class="fa fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                @if($data->foto)
                                                <img src="{{asset('images/soal/'. $data->foto)}}" alt="" width="100%">
                                                @else
                                                <img src="{{asset('admin/dist/img/landing-pg/calenderapp.png')}}" alt=""
                                                    width="100%">
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-justify">{!! $data->soal !!}</p>
                                                <hr>
                                                <p><b>pilihan jawaban :</b></p><br>
                                                <p> A. {{$data->a}}</p>
                                                <p> B. {{$data->b}}</p>
                                                <p> C. {{$data->c}}</p>
                                                <p> D. {{$data->d}}</p>
                                                <br>
                                                <p><b>Kunci Jawaban :</b></p>
                                                <p>{{$data->kunci }}</p>
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


@endsection
@section('scripts')
<script>
    $("#tambah").click(function(){
            $('#status').text('Tambah Data');
            $('#exampleModalForms').modal('show');
        });
</script>
@endsection