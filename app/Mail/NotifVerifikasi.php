<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifVerifikasi extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sites.verifikasi')->with([
            'status' => $this->user->status,
            'name' => $this->user->name,
            'judul' => $this->user->peserta->lowongan->berita->judul,
            'NIK' => $this->user->peserta->NIK,
            'tgl_verifikasi' => Carbon::now()->translatedFormat('l, d F Y'),
        ]);
    }
}
