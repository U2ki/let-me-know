<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendAnswer extends Mailable
{
    use Queueable, SerializesModels;
//    private $myName;
//    private $myCrushName;
//    private $toMailaddress;

    /**
     * Create a new message instance.
     *
     */
//    public function __construct( $myName, $myCrushName)
//    {
//        $this->myName = $myName;
//        $this->myCrushName = $myCrushName;
//    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->from('stealing.lovefortune@gmail.com')
//                    ->subject( "【盗み見成功!!】" )
//                    ->view('mails.mailPeeked')
//                    ->with([
//                        'my_Name' => $this->myName  ,
//                        'my_Crush_Name'   => $this->myCrushName ,
//                    ]);
    }
}
