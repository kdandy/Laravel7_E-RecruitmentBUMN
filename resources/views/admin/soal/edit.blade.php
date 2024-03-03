@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Edit Soal</h2>
            </div>
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="hk-row">
                    <div class="col-lg-12">

                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Edit Soal</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <form method="POST" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Soal </label>
                                                <textarea name="soal" id="soal" class="tinymce" rows="1"
                                                    cols="1">{{$data->soal}}</textarea>
                                            </div>
                                            Pilihan Jawaban
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleDropdownFormEmail1">A</label>
                                                        <input type="text" value="{{$data->a}}" name="a"
                                                            class="form-control " id="a">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleDropdownFormEmail1">C</label>
                                                        <input type="text" value="{{$data->c}}" name="c"
                                                            class="form-control " id="c">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleDropdownFormEmail1">B</label>
                                                        <input type="text" value="{{$data->b}}" name="b"
                                                            class="form-control " id="b">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleDropdownFormEmail1">D</label>
                                                        <input type="text" value="{{$data->d}}" name="d"
                                                            class="form-control " id="d">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Kunci Jawaban</label>
                                                <select name="kunci" id="" class="form-control">
                                                    <option value="a" {{$data->kunci == 'a' ? 'selected' : ''}}>A
                                                    </option>
                                                    <option value="b" {{$data->kunci == 'b' ? 'selected' : ''}}>B
                                                    </option>
                                                    <option value="c" {{$data->kunci == 'c' ? 'selected' : ''}}>C
                                                    </option>
                                                    <option value="d" {{$data->kunci == 'd' ? 'selected' : ''}}>D
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Gambar</label>
                                                <input type="file" class="form-control " id="gambar" name="foto">
                                            </div>
                                            <div class="text-right">
                                                <a href="{{Route('soalIndex')}}" class="btn btn-secondary"><i
                                                        class="fa fa-arrow-left"></i> Kembali</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i>
                                                    Edit Data</button>
                                            </div>
                                        </form>
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