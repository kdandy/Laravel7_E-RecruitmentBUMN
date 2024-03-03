@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Edit Uji Kompetensi</h2>
            </div>
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="hk-row">
                    <div class="col-lg-12">

                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Edit Uji Kompetensi</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <form method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Lowongan</label>
                                                <select name="lowongan_id" id="" class="form-control">
                                                    <option value="">-- pilih lowongan --</option>
                                                    @foreach($lowongan as $d)
                                                    <option value="{{$d->id}}"
                                                        {{$data->lowongan_id == $d->id ? 'selected' : ''}}>
                                                        {{$d->berita->judul}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Tanggal Ujian</label>
                                                <input type="date" value="{{$data->tgl_ujian}}" class="form-control "
                                                    id="tgl_ujian" name="tgl_ujian">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Durasi Pengerjaan (Menit)</label>
                                                <input type="number" class="form-control" value="{{ $data->durasi }}" id="durasi" name="durasi" required>
                                            </div>
                                            <div class="text-right">
                                                <a href="{{Route('ujiKompetensiIndex')}}" class="btn btn-secondary"><i
                                                        class="fa fa-arrow-left"></i> Kembali</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i>
                                                    Ubah Data</button>
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
