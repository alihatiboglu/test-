<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class welcome extends Mailable
{
    use Queueable, SerializesModels;
    
    public function build()
    {
        return $this->markdown('emails.welcome');
    }
}
