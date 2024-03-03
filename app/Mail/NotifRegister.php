<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifRegister extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sites.register')->with([
            'password' => $this->password,
            'name' => $this->user->name,
            'judul' => $this->user->peserta->lowongan->berita->judul,
            'NIK' => $this->user->peserta->NIK,
            'tgl_email' => Carbon::now()->translatedFormat('l, d F Y'),
        ]);
    }
}
