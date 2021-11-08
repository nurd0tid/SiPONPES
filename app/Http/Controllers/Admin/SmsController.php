<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use App\Models\Sms;
use App\Http\Controllers\Controller;

class SmsController extends Controller
{
    public function index()
    {
        return view('admin.extra.sms.index', [
            'sms' => Sms::all()
        ]);
    }

    public function create()
    {
        return view('admin.extra.sms.create', [
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
        return redirect('/extra/sms/create')->with('success', 'API Key has been created!!');
    }

    public function destroy(Sms $sms)
    {
        Sms::destroy($sms->id);
        return redirect('/extra/sms/create')->with('warning', 'API Key has been deleted!');
    }

    public function send(Request $request)
    {
        try {
            $basic  = new \Nexmo\Client\Credentials\Basic($request->api_key, $request->api_secret);
            $client = new \Nexmo\Client($basic);

            $message = $client->message()->send([
                'to' => $request->to,
                'from' => $request->from,
                'text' => $request->message,
            ]);

            return redirect('/extra/whatsapp')->with('success', 'SMS Gateway has been sending!');
        } catch (\Exception $e) {
            return redirect('/extra/whatsapp')->with('error', 'SMS Gateway not sent!');
        }
    }
}
