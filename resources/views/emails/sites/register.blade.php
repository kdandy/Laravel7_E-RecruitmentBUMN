@component('mail::message')
Hai {{$name}} - {{ $NIK }},

Terima kasih sudah mendaftar pada lowongan {{$judul}} <br>

Silahkan tunggu verikasi akun dari admin kemudian login menggunakan : <br>
Username : {{$NIK}} <br>
Password : {{$password}}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/', 'color' => 'primary'])
Klik Disini Untuk Kunjungi Website Kami
@endcomponent

Terima kasih,<br>
<br>
Tanggal verifikasi {{$tgl_email}}
<br>
<a style="text-decoration: none;" href="['url' => 'http://127.0.0.1:8000/']">PT. Telkom Akses Banjarmasin</a>, <br>
Jl. Djok Mentaya No. 1, Banjarmasin Tengah, Kota Banjarmasin, 707111
(Gedung Serbaguna Telkom)
@endcomponent