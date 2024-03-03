@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Edit Informasi Lowongan</h2>
            </div>
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="hk-row">
                    <div class="col-lg-12">

                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Edit Informasi Lowongan</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <form method="POST" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Judul</label>
                                                <input type="text" class="form-control" value="{{$data->judul}}"
                                                    name="judul" id="judul" placeholder="judul">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Isi </label>
                                                <textarea name="isi" id="isi" rows="10"
                                                    class="tinymce">{{$data->isi}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Thumbnail</label>
                                                <input type="file" class="form-control" name="foto" id="nama"
                                                    placeholder="Foto">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Posisi</label>
                                                <select name="posisi[]" id="id" class=" form-control "
                                                    multiple="multiple" data-placeholder="Choose">
                                                    @foreach($posisi as $p)
                                                    <option value="{{$p->nama}}">
                                                        {{$p->nama}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Keterangan Lowongan </label>
                                                <textarea name="keterangan" id="keterangan" rows="10"
                                                    class="tinymce">{{$data->lowongan->keterangan}}</textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleDropdownFormEmail1">Tanggal Pembukaan
                                                            Pendaftaran</label>
                                                        <input type="date" class="form-control" name="tgl_mulai"
                                                            id="nama" value="{{$data->lowongan->tgl_mulai}}"
                                                            placeholder="nama">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleDropdownFormEmail1">Tanggal Penutupan
                                                            Pendaftaran</label>
                                                        <input type="date" value="{{$data->lowongan->tgl_selesai}}"
                                                            name="tgl_selesai" class="form-control" id="nama"
                                                            placeholder="nama">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Pendidikan Minimal</label>
                                                <select name="pendidikan_terakhir_id" class="form-control" required>
                                                    @foreach($pendidikan as $d)
                                                    <option value="{{ $d->id }}"
                                                        {{ $d->id == $data->lowongan->pendidikan_terakhir_id ? 'selected' : '' }}>
                                                        {{ $d->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">IPK Minimal</label>
                                                <input type="text" class="form-control"
                                                    value="{{$data->lowongan->ipk_min}}" name="ipk_min" id="">
                                            </div>
                                            <div class="text-right">
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
    $("#id").select2().val({!! $posisi2 !!});
    $('#id').trigger('change');
</script>
@endsection