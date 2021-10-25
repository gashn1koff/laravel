<?php

namespace App\Jobs;

use App\Mail\CustomMailer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $from;
    private $to;
    private $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($to, $from, $message)
    {
        $this->from = $from;
        $this->to = $to;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->to)
            ->send(
                new CustomMailer(
                    $this->message,
                    $this->from
                )
            );
    }
}
