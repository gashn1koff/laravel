<?php

namespace App\Console\Commands;

use App\Mail\CustomMailer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class EmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email {user_email} {--message=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $email = $this->argument('user_email');
        $message = $this->option('message')?? 'default message';
        dump($message);
        Mail::to($email)
            ->send(
                new CustomMailer($message, 'nikita@gmail.com'
                )
            );
    }
}
