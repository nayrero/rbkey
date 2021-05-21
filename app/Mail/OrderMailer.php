<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;
class OrderMailer extends Mailable
{
    use Queueable, SerializesModels;
    private $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    //return $this->view('email');
    return $this->from('mansheevsolbon@yandex.ru', 'noreply@rbkey.ru')
            ->subject('Заявка с сайта')
            ->view('email', ['data' => $this->data]);
    }
}