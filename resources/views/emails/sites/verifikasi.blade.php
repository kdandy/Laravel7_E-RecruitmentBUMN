@component('mail::message')
Hai {{$name}} - {{ $NIK }},

Seleksi berkas anda di lowongan {{$judul}} <br>
@if($status == 1) Sudah diterima dan akun anda sudah aktif silahkan mengunjungi website dibawah ini untuk login @elseif($status == 0) Sedang dalam tahap pemeriksaan @else Telah ditolak, mohon maaf atas ketidaknyamannnya. Silahkan coba lagi dilowongan berikutnya @endif <br> Tanggal verifikasi {{$tgl_verifikasi}}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/', 'color' => 'primary'])
Klik Disini Untuk Kunjungi Website Kami
@endcomponent

TerimaKasih,<br>
<a style="text-decoration: none;" href="['url' => 'http://127.0.0.1:8000/']">PT. Telkom Akses Banjarmasin</a>, <br>
Jl. Djok Mentaya No. 1, Banjarmasin Tengah, Kota Banjarmasin, 707111
(Gedung Serbaguna Telkom)
@endcomponent
