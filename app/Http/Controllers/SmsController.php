<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use App\Models\Sms;

class SmsController extends Controller
{
    public function index()
    {
        return view('admin.sms.index', [
            'sms' => Sms::all()
        ]);
    }

    public function create()
    {
        return view('admin.sms.create', [
            'sms' => Sms::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'api_key' => 'required',
            'api_secret'  => 'required',
        ]);

        Sms::create($validateData);
        return redirect('/main/sms/create')->with('success', 'API Key has been created!!');
    }

    public function destroy(Sms $sms)
    {
        Sms::destroy($sms->id);
        return redirect('/main/sms/create')->with('warning', 'API Key has been deleted!');
    }

    public function send(Request $request)
    {
        $basic  = new \Nexmo\Client\Credentials\Basic($request->api_key, $request->api_secret);
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' => $request->to,
            'from' => $request->from,
            'text' => $request->message,
        ]);

        return redirect('/main/sms')->with('success', 'SMS has been sending!');
    }
}
