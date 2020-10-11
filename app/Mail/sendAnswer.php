<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendAnswer extends Mailable
{
    use Queueable, SerializesModels;
    private $title;
    private $q1, $q2, $q3, $q4, $q5;
    private $a1, $a2, $a3, $a4, $a5;
    private $toMailaddress;

    /**
     * Create a new message instance.
     *
     */
    public function __construct( $title, $q1, $q2, $q3, $q4, $q5, $a1, $a2, $a3, $a4, $a5)
    {
        $this->title = $title;
        $this->q1 = $q1;
        $this->q2 = $q2;
        $this->q3 = $q3;
        $this->q4 = $q4;
        $this->q5 = $q5;
        $this->a1 = $a1;
        $this->a2 = $a2;
        $this->a3 = $a3;
        $this->a4 = $a4;
        $this->a5 = $a5;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('letmeknow.myapp@gmail.com')
                    ->subject( "質問に新着の回答着ました" )
                    ->view('mails.mailAnswer')
                    ->with([
                        'title' => $this->title,
                        'q1'    => $this->q1,
                        'q2'    => $this->q2,
                        'q3'    => $this->q3,
                        'q4'    => $this->q4,
                        'q5'    => $this->q5,
                        'a1'    => $this->a1,
                        'a2'    => $this->a2,
                        'a3'    => $this->a3,
                        'a4'    => $this->a4,
                        'a5'    => $this->a5,
                    ]);
    }
}
