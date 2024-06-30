<?php

namespace App\Services;

use Twilio\Rest\Client;

class TwilioService
{
    protected static $twilio;

    public static function send($to, $message)
    {
        if (! isset(self::$twilio)) {
            $sid = config('twilio.sid');
            $token = config('twilio.token');
            self::$twilio = new Client($sid, $token);
        }

        self::$twilio->messages->create($to, [
            "from" => config('twilio.from_number'),
            "body" => $message,
        ]);
    }
}
