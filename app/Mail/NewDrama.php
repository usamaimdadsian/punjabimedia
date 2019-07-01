<?php

namespace App\Mail;

use App\Video;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewDrama extends Mailable
{
    use Queueable, SerializesModels;
    public $video;
    public $actors;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Video $video)
    {
        $this->video=$video;
        $this->actors=$video->actors;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.newdrama');
    }
}
