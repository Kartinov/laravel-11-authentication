<?php

namespace App\Http\Controllers;

use App\Services\TwilioService;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function send()
    {
        TwilioService::send('+38977661113', 'HELLO FROM TWILIO');
    }
}
