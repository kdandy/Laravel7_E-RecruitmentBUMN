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
            <h2 style="text-align:center; text-transform:uppercase;">DATA PELAMAR {{$lowongan->berita->judul}} STATUS  @if($status == 0) BELUM DIVERIFIKASI @elseif($status == 1) DIVERIFIKASI @else LAMARAN DITOLAK @endif</h2>
            <br>
            <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIK</th>
                                                    <th>Nama</th>
                                                    <th>Tempat, Tanggal Lahir</th>
                                                    <th>Nomor Hp</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $d)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$d->NIK}}</td>
                                                    <td>{{$d->user->name}}</td>
                                                    <td>{{$d->tempat_lahir}}, {{$d->tgl_lahir}}</td>
                                                    <td>{{$d->tlp_hp}}</td>
                                                    <td>{{$d->email}}</td>
                                                    <td>
                                                        @if($d->user->status == 0)
                                                        Belum diverifikasi
                                                        @else
                                                        Sudah diverifikasi
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                     
                    </div>
             </div>
         </body>
</html>