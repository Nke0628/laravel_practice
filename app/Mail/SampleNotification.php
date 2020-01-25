<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SampleNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $public_variable_test;
    protected $title;
    protected $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $text)
    {
        $this->title = sprintf("%sさん、ありがとうございます。", $name);
        $this->text = $text;
        $this->public_variable_test = '変数テスト';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.sample_notification')
                    ->text('emails.sample_notification_plane')
                    ->subject($this->title)
                    ->with([
                        'text' => $this->text
                    ]);
    }
}
