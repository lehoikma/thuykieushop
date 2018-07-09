<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderAdminSendMailComplete extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($contents)
    {
        $this->contents = $contents;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Xử Lý Đơn Đặt Hàng')
            ->view('member.orderAdminSendMailComplete')->with([
            'content' => $this->contents
        ]);
    }
}
