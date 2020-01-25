<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;

class SampleController extends Controller
{
    public function SampleNotification()
    {
        $name = 'ララベル太郎';
        $text = 'これからもよろしくお願いいたします';
        $to = 'test@gmail.com';
        Mail::to($to)->send(new SampleNotification($name, $text));
    }

    public function SampleNotificationQueue()
    {
        $name = 'ララベル太郎';
        $text = 'これからもよろしくお願いいたします';
        $to = 'test@gmail.com';
        Mail::to($to)->queue(new SampleNotification($name, $text));
    }
}
