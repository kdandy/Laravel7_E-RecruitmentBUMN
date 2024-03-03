<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HasilUjiWawancara extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ujiWawancara)
    {
        $this->ujiWawancara = $ujiWawancara;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sites.ujiWawancara')->with([
            'status' => $this->ujiWawancara->status,
            'name' => $this->ujiWawancara->peserta->user->name,
            'judul' => $this->ujiWawancara->peserta->lowongan->berita->judul,
            'NIK' => $this->ujiWawancara->peserta->NIK,
            'tgl_verifikasi' => Carbon::now()->translatedFormat('l, d F Y'),
        ]);
    }
}
