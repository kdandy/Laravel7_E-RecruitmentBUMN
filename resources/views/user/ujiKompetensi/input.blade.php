@extends('layouts.user')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Detail Soal</h2>
                <h3>Waktu mengerjakan soal tersisa <span id="timer"></span></h3>
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
                                    <a href="{{Route('beritaIndex')}}" class="btn btn-sm btn-secondary"><i
                                            class="fa fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                            <br>
                            <form action="{{Route('ujiKompetensiPesertaStore')}}" method="POST" id="myForm">
                                @csrf
                                <input type="hidden" name="uji_id" value="{{$data->id}}">
                                @foreach($soals as $soal)
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="table-wrap">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    @if($soal->foto)
                                                    <img src="{{asset('images/soal/'. $soal->foto)}}" alt=""
                                                        width="100%">
                                                    @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <h4>Soal {{$loop->iteration}}</h4>
                                                    <p class="text-justify">{!! $soal->soal !!}</p>
                                                    <input type="hidden" name="soal_id[]" value="{{$soal->id}}">
                                                    <hr>
                                                    <p><b>pilihan jawaban :</b></p><br>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="pilihan[{{$loop->iteration -1}}]" id="exampleRadios1"
                                                            value="a">
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            {{$soal->a}}
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="pilihan[{{$loop->iteration -1}}]" id="exampleRadios2"
                                                            value="b">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            {{$soal->b}}
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="pilihan[{{$loop->iteration -1}}]" id="exampleRadios3"
                                                            value="c">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            {{$soal->c}}
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="pilihan[{{$loop->iteration -1}}]" id="exampleRadios3"
                                                            value="d">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            {{$soal->d}}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                @endforeach
                                <hr>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-danger "><i class="ti-save"></i> Simpan Jawaban
                                    </button>
                                </div>
                            </form>
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
    function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            // Swal.fire({
            //         title: 'Waktu telah habis',
            //         text: " Terimakasih telah melakukan ujian " ,
            //         icon: 'warning',
            //         showCancelButton: false,
                // })
            $("#myForm").submit();
            exit();

        }
    }, 1000);
}

window.onload = function () {
    var times = {{ $data->durasi }} * 60,
        display = document.querySelector('#timer');
    startTimer(times, display);

};

</script>
@endsection