<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Jobs\SendEmail;
use App\Mail\CustomMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function __invoke(EmailRequest $request)
    {
        SendEmail::dispatch('nikitagash@gmail.com', 'gashnikoff.nikita@yandex.ru', 'Гони бабки, петушара, иначе спам неизбежен!');
        //SendEmail::dispatch('nikita@yane.ru', 'vanya@yandex.ru', 'EMAIL')->onQueue('emails');
        //SendEmail::dispatch('nikita@yane.ru', 'vanya@yandex.ru', 'SMS')->onQueue('sms')->delay(now()->addSeconds('5'));
        //перенесли все в job SendEmail
//            Mail::to($request->input('to'))
//                ->send(
//                    new CustomMailer(
//                        $request->input('message'),
//                        $request->input('from')
//                    )
//                );



    }
}
