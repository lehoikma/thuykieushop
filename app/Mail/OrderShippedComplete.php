<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShippedComplete extends Mailable
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
        return $this->subject('Xác Nhận Đơn Đặt Hàng')
            ->view('member.orderShippedComplete')->with([
            'content' => $this->contents
        ]);
    }
}
