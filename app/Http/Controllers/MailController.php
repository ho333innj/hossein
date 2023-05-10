<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $to = 'fatimasafari@gmail.com';
        $fromAddress = 'hossein1374azarazar@gmail.com';
        $subject = 'Membership message';
        $body='عضویت شما در سایت با موفقیت انجام شد';
        $fullname = 'حسین نجفی';
        $username = 'ho333in_nj';

       if (Mail::to($to)->send(new TestMail($subject , $fromAddress ,$fullname , $username,  $body ,$username)))
       return "<h2> ایمیل ارسال گردید </h2>"; else return "<h2> خطا در ارسال ایمیل </h2>";
    }
}
