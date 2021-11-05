<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function index()
    {
        return view('admin.sms.index');
        // Nexmo::message()->send([
        //     'to' => '6289601027809',
        //     'from' => '628982819689',
        //     'text' => 'Coki.',
        // ]);

        // echo "Message Sent!";
    }

    public function send(Request $request)
    {
        Nexmo::message()->send([
            'to' => $request->to,
            'from' => $request->from,
            'text' => $request->message,
        ]);

        return redirect('/main/sms')->with('success', 'SMS has been sending!');
    }
}
