@component('mail::message')
Hai {{$name}} - {{ $NIK }},

Hasil tes kesehatan anda di lowongan {{$judul}} <br>
@if($status == 1) Dinyatakan lulus silahkan mengunjungi website dibawah ini untuk melihat jadwal tes wawancara  @else Dinyatakan tidak lulus, mohon maaf atas ketidaknyamannnya. Silahkan coba lagi dilowongan berikutnya @endif

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login', 'color' => 'primary'])
Klik Disini Untuk Kunjungi Website Kami
@endcomponent

TerimaKasih,<br>
<a style="text-decoration: none;" href="['url' => 'http://127.0.0.1:8000/']">PT. Telkom Akses Banjarmasin</a>, <br>
Jl. Djok Mentaya No. 1, Banjarmasin Tengah, Kota Banjarmasin, 707111
(Gedung Serbaguna Telkom)
<br>
<br>HRD Telkom Indonesia Banjarmasin - {{$tgl_verifikasi}}
@endcomponent
