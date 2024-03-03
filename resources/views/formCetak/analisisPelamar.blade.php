<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    h4,h2{
        font-family:serif;
    }
        body{
            font-family:sans-serif;
        }
        table{
        border-collapse: collapse;
        width:100%;
      }
      table, th, td{
      }
      th{
        text-align: left;
      }
      tr{
          height: 30px;
      }
      td{
        text-align: left;
        height: 30px;
      }
      br{
          margin-bottom: 5px !important;
      }
     .judul{
         text-align: center;
     }
     .header{
         margin-bottom: 0px;
         text-align: center;
         height: 20px;
         padding: 0px;
     }
     .pemko{
         width:120px;
     }
     .logo{
         float: left;
         margin-right: 0px;
         width: 21%;
         padding:0px;
         text-align: right;
     }
     .headtext{
         float:right;
         margin-left: 0px;
         padding-top:10px;
         width: 75%;
         padding-left:0px;
         padding-right:10%;
     }
     hr{
         margin-top: 10%;
         height: 4px;
         background-color: black;
         width:100%;
     }
     .ttd{
         margin-left:70%;
         text-align: center;
         text-transform: uppercase;
     }
     .text-right{
         text-align:right;
     }
     .isi{
         padding:10px;
     }
    </style>
</head>
<body>
    <div class="header">
            <div class="logo">
                    <img  class="pemko" src="depan/assets/img/logo.png" >
            </div>
            <div class="headtext">
                <h2 style="margin:1px;">PT.TELKOM AKSES</h2>
                <p style="margin:0px;">Karang Mekar, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan 70236, Telepon :(0511) 3255551</p>
            </div>
            <br>
    </div>
    <div class="container">
        <div class="isi">
        <hr>
            <h2 style="text-align:center; text-transform:uppercase;">DATA ANALISIS PELAMAR {{$lowongan->berita->judul}}</h2>
            <br>
            <table>
                <tr>
                    <td width="40%">Posisi</td>
                    <td>: @foreach(collect($lowongan->posisi) as $l) 
                            {{$l}},
                          @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Pendaftaran</td>
                    <td>: {{carbon\carbon::parse($lowongan->tgl_mulai)->translatedFormat('d F Y')}}  -  {{carbon\carbon::parse($lowongan->tgl_selesai)->translatedFormat('d F Y')}}</td> 
                </tr>
                <tr>
                    <td>Pendidikan Minimal</td>
                    <td>: {{$lowongan->pendidikan_terakhir->nama}}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:  
                    @php
                        $now = carbon\carbon::now();
                    @endphp
                    @if($now > $lowongan->tgl_selesai)
                        <i class="text-danger"> Sudah ditutup</i>
                    @elseif($now < $lowongan->tgl_mulai)
                        <i class="text-info"> Belum Berlangsung</i>
                    @else
                        <i class="text-success"> Sedang Berlangsung</i>
                    @endif</p>
                    </td>
                </tr>
                <tr>
                    <td> Jumlah Pelamar Pria</td>
                    <td>: {{$lowongan->peserta->where('jk',1)->count()}} pelamar</td> 
                </tr>
                <tr>
                    <td> Jumlah Pelamar Wanita</td>
                    <td>: {{$lowongan->peserta->where('jk',2)->count()}} pelamar</td>
                </tr>
            </table>
            <br>
            <table style="border:1px solid black">
                <thead>
                    <tr>
                        <th style="border:1px solid black">Tahapan</th>
                        <th style="border:1px solid black">Jumlah Peserta / Pelamar</th>
                        <th style="border:1px solid black">Jumlah Peserta yang lolos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border:1px solid black">
                        <td style="border:1px solid black">Seleksi Berkas</td>
                        <td style="border:1px solid black">{{$lowongan->peserta->count()}} pelamar</td>
                        <td style="border:1px solid black">{{$seleksi_berkas->count()}} pelamar</td>
                    </tr>
                    <tr style="border:1px solid black">
                        <td style="border:1px solid black">uji Kompetensi</td>
                        <td style="border:1px solid black">
                        @if($lowongan->uji_kompetensi->isNotEmpty()) 
                            @if($lowongan->uji_kompetensi->first()->uji_kompetensi_peserta->isNotEmpty())
                                {{$lowongan->uji_kompetensi->first()->uji_kompetensi_peserta->count()}} Pelamar
                            @else
                                Belum ada peserta
                            @endif
                        @else
                        Belum ada Jadwal Uji
                        @endif
                        </td>
                        <td style="border:1px solid black">
                        @if($lowongan->uji_kompetensi->isNotEmpty()) 
                            @if($lowongan->uji_kompetensi->first()->uji_kompetensi_peserta->isNotEmpty())
                                {{$lowongan->uji_kompetensi->first()->uji_kompetensi_peserta->where('nilai','>=', 75)->count()}} Pelamar
                            @else
                                Belum ada peserta yang lolos
                            @endif
                        @else
                        -
                        @endif
                        </td>
                    </tr>
                    <tr style="border:1px solid black">
                        <td style="border:1px solid black">uji Kesehatan</td>
                        <td style="border:1px solid black">
                        @if($lowongan->uji_kesehatan->isNotEmpty()) 
                            @if($lowongan->uji_kesehatan->first()->uji_kesehatan_peserta->isNotEmpty())
                                {{$lowongan->uji_kesehatan->first()->uji_kesehatan_peserta->count()}} Pelamar
                            @else
                                Belum ada peserta
                            @endif
                        @else
                        Belum ada Jadwal Uji
                        @endif
                        </td>
                        <td style="border:1px solid black">
                        @if($lowongan->uji_kesehatan->isNotEmpty()) 
                            @if($lowongan->uji_kesehatan->first()->uji_kesehatan_peserta->isNotEmpty())
                                {{$lowongan->uji_kesehatan->first()->uji_kesehatan_peserta->where('status', 1)->count()}} Pelamar
                            @else
                                Belum ada peserta yang lolos
                            @endif
                        @else
                        -
                        @endif
                        </td>
                    </tr>
                    <tr style="border:1px solid black">
                        <td style="border:1px solid black">uji wawancara</td>
                        <td style="border:1px solid black">
                        @if($lowongan->uji_wawancara->isNotEmpty()) 
                            @if($lowongan->uji_wawancara->first()->uji_wawancara_peserta->isNotEmpty())
                                {{$lowongan->uji_wawancara->first()->uji_wawancara_peserta->count()}} Pelamar
                            @else
                                Belum ada peserta
                            @endif
                        @else
                        Belum ada Jadwal Uji
                        @endif
                        </td>
                        <td style="border:1px solid black">
                        @if($lowongan->uji_wawancara->isNotEmpty()) 
                            @if($lowongan->uji_wawancara->first()->uji_wawancara_peserta->isNotEmpty())
                                {{$lowongan->uji_wawancara->first()->uji_wawancara_peserta->where('status', 1)->count()}} Pelamar
                            @else
                                Belum ada peserta yang lolos
                            @endif
                        @else
                        -
                        @endif
                        </td>
                    </tr>
                    <tr style="border:1px solid black">
                        <td style="border:1px solid black" colspan="2">Hasil Akhir</td>
                        <td style="border:1px solid black">
                        @if($lowongan->hasil_akhir->isNotEmpty()) 
                            @if($lowongan->hasil_akhir->isNotEmpty())
                                {{$lowongan->hasil_akhir->count()}} Pelamar
                            @else
                                Belum ada peserta yang lolos
                            @endif
                        @else
                        -
                        @endif
                        </td>
                    </tr>
                </tbody>
            </table>       
                    </div>
             </div>

             <div class="ttd">
                <h6>Menyetujui</h6>
                <h5>HRD Telkom Akses Banjarmasin</h5>
                <br>
                <br>
                <h5 >..................................</h5>
            </div>
         </body>
</html>