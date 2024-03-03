@extends('layouts.user')
@push('styles')
    <style>
        .timeline {
    list-style: none;
    padding: 20px 0 20px;
    position: relative;
}

    .timeline:before {
        top: 0;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #eeeeee;
        left: 50%;
        margin-left: -1.5px;
    }

    .timeline > li {
        margin-bottom: 20px;
        position: relative;
    }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li > .timeline-panel {
            width: 46%;
            float: left;
            border: 1px solid #d4d4d4;
            border-radius: 2px;
            padding: 20px;
            position: relative;
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        }

            .timeline > li > .timeline-panel:before {
                position: absolute;
                top: 26px;
                right: -15px;
                display: inline-block;
                border-top: 15px solid transparent;
                border-left: 15px solid #ccc;
                border-right: 0 solid #ccc;
                border-bottom: 15px solid transparent;
                content: " ";
            }

            .timeline > li > .timeline-panel:after {
                position: absolute;
                top: 27px;
                right: -14px;
                display: inline-block;
                border-top: 14px solid transparent;
                border-left: 14px solid #fff;
                border-right: 0 solid #fff;
                border-bottom: 14px solid transparent;
                content: " ";
            }

        .timeline > li > .timeline-badge {
            color: #fff;
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 1.4em;
            text-align: center;
            position: absolute;
            top: 16px;
            left: 50%;
            margin-left: -25px;
            background-color: #999999;
            z-index: 100;
            border-top-right-radius: 50%;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            border-bottom-left-radius: 50%;
        }

        .timeline > li.timeline-inverted > .timeline-panel {
            float: right;
        }

            .timeline > li.timeline-inverted > .timeline-panel:before {
                border-left-width: 0;
                border-right-width: 15px;
                left: -15px;
                right: auto;
            }

            .timeline > li.timeline-inverted > .timeline-panel:after {
                border-left-width: 0;
                border-right-width: 14px;
                left: -14px;
                right: auto;
            }

.timeline-badge.primary {
    background-color: #2e6da4 !important;
}

.timeline-badge.success {
    background-color: #3f903f !important;
}

.timeline-badge.warning {
    background-color: #f0ad4e !important;
}

.timeline-badge.danger {
    background-color: #d9534f !important;
}

.timeline-badge.info {
    background-color: #5bc0de !important;
}

.timeline-title {
    margin-top: 0;
    color: inherit;
}

.timeline-body > p,
.timeline-body > ul {
    margin-bottom: 0;
}

    .timeline-body > p + p {
        margin-top: 5px;
    }

@media (max-width: 767px) {
    ul.timeline:before {
        left: 40px;
    }

    ul.timeline > li > .timeline-panel {
        width: calc(100% - 90px);
        width: -moz-calc(100% - 90px);
        width: -webkit-calc(100% - 90px);
    }

    ul.timeline > li > .timeline-badge {
        left: 15px;
        margin-left: 0;
        top: 16px;
    }

    ul.timeline > li > .timeline-panel {
        float: right;
    }

        ul.timeline > li > .timeline-panel:before {
            border-left-width: 0;
            border-right-width: 15px;
            left: -15px;
            right: auto;
        }

        ul.timeline > li > .timeline-panel:after {
            border-left-width: 0;
            border-right-width: 14px;
            left: -14px;
            right: auto;
        }
}
    </style>
@endpush
@section('content')
 <!-- Main Content -->
 <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
				<!-- Title -->
				<div class="hk-pg-header align-items-top">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Beranda Pelamar</h2>
						<p>Aplikasi Rekrutmen Pegawai PT.Telkom Akses<a href="#"> Learn more.</a></p>
					</div>
					<div class="d-flex">
                    @if(Auth::user()->status == 1)
                        <a href="{{Route('profilUser')}}" class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15"><span class="icon-label"><i class="fa fa-edit"></i> </span><span class="btn-text">Ubah Profil </span></a>
                    @endif
					</div>
				</div>
				<!-- /Title -->
                <!-- Row -->
                @if(Auth::user()->status == 1)
                <div class="alert alert-danger">
                <h4>Peringatan</h4>
                <p>Pastikan untuk mengganti password anda untuk keamanan akun </p>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-12">
                    <div class="text-center">
                        <h2>Timeline Pendaftaran </h2>
                    </div>
                    <ul class="timeline">
                    <li>
                    <div class="timeline-badge"><i class="glyphicon glyphicon-hourglass"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                        <h4 class="timeline-title">Pendaftaran dan Seleksi Berkas </h4>
                        </div>
                        <div class="timeline-body">
                            <p>{{carbon\carbon::parse(Auth::user()->peserta->lowongan->tgl_mulai)->translatedFormat('d F Y')}} -
												{{carbon\carbon::parse(Auth::user()->peserta->lowongan->tgl_selesai)->translatedFormat('d F Y')}}</p>
                        </div>
                    </div>
                    </li>
                    <li class="timeline-inverted">
                    <div class="timeline-badge danger"><i class="glyphicon glyphicon-hourglass"></i></div> 
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                        <h4 class="timeline-title">Uji Kompetensi</h4>
                        </div>
                        <div class="timeline-body">
                            @if(Auth::user()->peserta->lowongan->uji_kompetensi->first())
                            <p>{{carbon\carbon::parse(Auth::user()->peserta->lowongan->uji_kompetensi->first()->tgl_ujian)->translatedFormat('d F Y')}}</p>
                            <br>
                            @if(carbon\carbon::parse(Auth::user()->peserta->lowongan->uji_kompetensi->first()->tgl_ujian)->translatedFormat('d F Y') == carbon\carbon::now()->translatedFormat('d F Y'))
                            <a href="{{Route('ujiKompetensiInput',['uuid'=>Auth::user()->peserta->lowongan->uuid])}}" class="btn btn-sm btn-danger"> <i class="fa fa-play"></i> Mulai uji Kompensi</a>
                            @endif
                            <a href="{{Route('ujiKompetensiHasil',['uuid'=>Auth::user()->peserta->lowongan->uuid])}}" class="btn btn-sm btn-danger"> <i class="fa fa-database"></i> Lihat Hasil Tes</a>
                            @else
                            uji Kompetensi belum diinput
                            @endif
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="timeline-badge danger"><i class="glyphicon glyphicon-hourglass"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                        <h4 class="timeline-title">Tes Kesehatan</h4>
                        </div>
                        <div class="timeline-body">
                            @if(Auth::user()->peserta->lowongan->uji_kesehatan->first())
                                <p>{{carbon\carbon::parse(Auth::user()->peserta->lowongan->uji_kesehatan->first()->tgl_uji)->translatedFormat('d F Y')}}</p>
                                <br>
                                <a href="{{Route('ujiKesehatanHasil')}}" class="btn btn-sm btn-danger"><i class="fa fa-database"></i> Hasil Tes Kesehatan</a>
                                @else
                                uji Kesehatan belum diinput
                            @endif 
                        <br>
                        </div>
                    </div>
                    </li>
                    <li class="timeline-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                        <h4 class="timeline-title">Tes Wawancara</h4>
                        </div>
                        <div class="timeline-body">
                            @if(Auth::user()->peserta->lowongan->uji_wawancara->first())
                                <p>{{carbon\carbon::parse(Auth::user()->peserta->lowongan->uji_wawancara->first()->tgl_uji)->translatedFormat('d F Y')}}</p>
                                <br>
                                <a href="{{Route('ujiWawancaraHasil')}}" class="btn btn-sm btn-danger"><i class="fa fa-database"></i> Hasil Tes Wawancara</a>
                                @else
                                uji Wawancara belum diinput
                            @endif                         
                        </div>
                    </div>
                    </li>
                </ul>
                    </div>
                @else
                <div class="alert alert-danger">
                <h4>Akun anda belum aktif</h4>
                <p>Silahkan menunggu verifikasi dari admin</p>
                </div>
                @endif
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
			
            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->
@endsection
