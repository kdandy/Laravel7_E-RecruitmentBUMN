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
         height: 0px;
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
            <h2 style="text-align:center;">BIODATA PELAMAR</h2>
            <br>
            <table>
                <tr height="30px !important;">
                    <td width="50%">Nama</td>
                    <td>: {{$data->user->name}}</td>
                </tr>
                <tr height="30px !important;">
                    <td>Nik</td>
                    <td>: {{$data->NIK}}</td>
                </tr>
                <tr height="30px !important;">
                    <td>Jenis Kelamin</td>
                    <td>:
                        @if($data->jk == 1)
                        Laki-laki
                        @else
                        Perempuan
                        @endif
                    </td>
                 </tr>
                <tr height="30px !important;">
                    <td>Tempat, Tanggal lahir</td>
                    <td>: {{$data->tempat_lahir}},
                        {{carbon\carbon::parse($data->tgl_lahir)->translatedFormat('d F Y')}}
                    </td>
                </tr>
                <tr height="30px !important;">
                    <td width="40%">Agama</td>
                    <td>: {{$data->agama}}</td>
                </tr>
                <tr height="30px !important;">
                    <td>Warga Negara</td>
                    <td>: {{$data->agama}}</td>
                </tr>
                <tr height="30px !important;">
                    <td>Alamat KTP</td>
                    <td>: {{$data->alamat_ktp}}</td>
                </tr>
                <tr height="30px !important;">
                    <td>Alamat Sekarang</td>
                    <td>: {{$data->alamat_sekarang}}</td>
                </tr>               
                <tr height="30px !important;">
                    <td width="40%">Nomor Tlp Rumah</td>
                    <td>:
                        @if(!$data->tlp_rumah)
                        -
                        @else
                        {{$data->tlp_rumah}}
                        @endif
                    </td>
                </tr>
                <tr height="30px !important;">
                    <td>Nomor hp</td>
                    <td>: {{$data->tlp_hp}}</td>
                </tr>
                <tr height="30px !important;">
                    <td width="40%">email</td>
                    <td>: {{$data->email}}</td>
                </tr>
                <tr height="30px !important;">
                    <td width="40%">Ijazah Terakhir</td>
                    <td>: {{$data->ijazah_terakhir}}</td>
                </tr>
                <tr height="30px !important;">
                    <td>Nama Sekolah / Universitas</td>
                    <td>: {{$data->lembaga}}</td>
                </tr>
                <tr height="30px !important;">
                    <td>jurusan / Prodi</td>
                    <td>: {{$data->jurusan}}</td>
                </tr>                            
                <tr height="30px !important;">
                    <td width="40%">Tahun lulus</td>
                    <td>: {{$data->tahun_lulus}}</td>
                </tr>
                <tr height="30px !important;">
                    <td width="40%">IPK / Rata-rata UN</td>
                    <td>: {{$data->ipk}}</td>
                </tr>                
                <tr height="30px !important;">
                    <td width="40%">Tanggal Upload</td>
                    <td>:
                    {{carbon\carbon::parse($data->created_at)->translatedFormat('d F Y')}}
                    </td>
                </tr>
                <tr height="30px !important;">
                    <td width="40%">Status Lamaran</td>
                    <td>:
                        @if($data->user->status == 0)
                        <span class="text-warning">PENDING</span>
                        @elseif($data->user->status == 1)
                        <span class="text-success">VERIFIKASI</span>
                        @else
                        <span class="text-danger">DITOLAK</span>
                        @endif
                    </td>
                </tr>
            </table>
                     
                    </div>
             </div>
         </body>
</html>