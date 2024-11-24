<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TaskErrorMail extends Mailable
{
    use Queueable, SerializesModels;

    public $errorMessage;

    public function __construct($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function build()
    {
        return $this->view('emails.task_error')
                    ->with('errorMessage', $this->errorMessage);
    }
}
