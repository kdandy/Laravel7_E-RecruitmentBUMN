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
          border: 1px solid black;
          text-align:center !important;
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
            <h2 style="text-align:center; text-transform:uppercase;">DATA HASIL AKHIR LOWONGAN {{$lowongan->berita->judul}}</h2>
            <br>
            <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama </th>
                                                    <th>NIK</th>
                                                    <th>Seleksi Berkas</th>
                                                    <th>Uji Kompetensi</th>
                                                    <th>uji Kesehatan</th>
                                                    <th>Uji Wawancara</th>
                                                    <th>Hasil Akhir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               @foreach($lowongan->peserta as $d)
                                               <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$d->user->name}}</td>
                                                    <td>{{$d->NIK}}</td>
                                                    <td style="font-family: DejaVu Sans, sans-serif;">
                                                    @if($d->user->status == 1) 
                                                        ✔
                                                    @else
                                                        x
                                                    @endif
                                                    </td>
                                                    <td style="font-family: DejaVu Sans, sans-serif;">
                                                    @if($d->uji_kompetensi_peserta)
                                                        @if($d->uji_kompetensi_peserta->nilai >= 75) 
                                                            ✔
                                                        @else
                                                            x
                                                        @endif
                                                    @else
                                                        belum ada hasil uji
                                                    @endif
                                                    </td>                                                    
                                                    <td style="font-family: DejaVu Sans, sans-serif;">
                                                    @if($d->uji_kesehatan_peserta)
                                                        @if($d->uji_kesehatan_peserta->status == 1) 
                                                            ✔
                                                        @else
                                                            x
                                                        @endif
                                                    @else
                                                        belum ada hasil uji
                                                    @endif
                                                    </td>                                                       
                                                    <td style="font-family: DejaVu Sans, sans-serif;">
                                                    @if($d->uji_wawancara_peserta)
                                                        @if($d->uji_wawancara_peserta->status == 1) 
                                                            ✔
                                                        @else
                                                            x
                                                        @endif
                                                    @else
                                                        belum ada hasil uji
                                                    @endif
                                                    </td>         
                                                    <td style="font-family: DejaVu Sans, sans-serif;">
                                                    @if($d->hasil_akhir)
                                                            ✔
                                                    @else
                                                       x
                                                    @endif
                                                    </td>     
                                               </tr>
                                               @endforeach
                                            </tbody>
                                        </table>
                                        <br>
                                        <h5 style="font-family: DejaVu Sans, sans-serif;"> ✔ = LULUS , <br> x = TIDAK LULUS</h5>
                                        <div class="ttd">
                                            <h6>Menyetujui</h6>
                                            <h5>HRD Telkom Akses Banjarmasin</h5>
                                            <br>
                                            <br>
                                            <h5 >..................................</h5>
                                        </div>
                    </div>
             </div>
         </body>
</html>