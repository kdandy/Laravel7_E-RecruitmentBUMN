@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Edit Hasil Wawancara</h2>
            </div>
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="hk-row">
                    <div class="col-lg-12">

                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Edit Posisi</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <form method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1"> Peserta</label>
                                                <select name="peserta_id" id="" class="form-control"
                                                    aria-readonly="true">
                                                    @foreach($peserta as $d)
                                                    <option value="{{$d->id}}"
                                                        {{$data->peserta_id == $d->id ? 'selected' : ''}}>
                                                        {{$d->user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Nilai</label>
                                                <input type="number" value="{{ $data->nilai }}" class="form-control" name="nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option value="1" {{$data->status == 1 ? 'selected' : ''}}>Lulus
                                                    </option>
                                                    <option value="0" {{$data->status == 0 ? 'selected' : ''}}>Tidak
                                                        Lulus</option>
                                                </select>
                                            </div>
                                            <div class="text-right">
                                                <a href="{{Route('posisiIndex')}}" class="btn btn-secondary"><i
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
