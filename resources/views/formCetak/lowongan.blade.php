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
            <h2 style="text-align:center; text-transform:uppercase;">REPORT LOWONGAN</h2>
            <br>
            <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Posisi</th>
                                                    <th>IPK minimal</th>
                                                    <th>Pendidikan Terakhir</th>
                                                    <th>Tanggal Pendaftaran</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $d)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$d->berita->judul}}</td>
                                                    <td> @foreach(collect($d->posisi) as $p)
                                                        {{$p}} <br>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @if(!$d->ipk_min)
                                                        -
                                                        @else
                                                        {{$d->ipk_min}}
                                                        @endif
                                                    </td>
                                                    <td>{{$d->pendidikan_terakhir->nama}}</td>
                                                    <td>{{carbon\carbon::parse($d->tgl_mulai)->translatedFormat('d F Y')}}
                                                        -
                                                        {{carbon\carbon::parse($d->tgl_selesai)->translatedFormat('d F Y')}}
                                                    </td>
                                                    <td>
                                                   @if($now > $d->tgl_selesai)
                                                        <i class="text-danger"> Sudah ditutup</i>
                                                    @elseif($now < $d->tgl_mulai)
                                                        <i class="text-info"> Belum Berlangsung</i>
                                                    @else
                                                        <i class="text-success"> Sedang Berlangsung</i>
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