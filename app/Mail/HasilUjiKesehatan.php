<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HasilUjiKesehatan extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ujiKesehatan)
    {
        $this->ujiKesehatan = $ujiKesehatan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sites.ujiKesehatan')->with([
            'status' => $this->ujiKesehatan->status,
            'name' => $this->ujiKesehatan->peserta->user->name,
            'judul' => $this->ujiKesehatan->peserta->lowongan->berita->judul,
            'NIK' => $this->ujiKesehatan->peserta->NIK,
            'tgl_verifikasi' => Carbon::now()->translatedFormat('l, d F Y'),
        ]);
    }
}
