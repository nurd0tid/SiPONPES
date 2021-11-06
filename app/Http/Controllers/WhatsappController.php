<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sms;

class WhatsappController extends Controller
{
    public function index()
    {
        return view('admin.whatsapp.index', [
            'sms' => Sms::all()
        ]);
    }

    public function send(Request $request)
    {
        $url = "https://messages-sandbox.nexmo.com/v0.1/messages";
        $params = [
            "to" => ["type" => "whatsapp", "number" => $request->to],
            "from" => ["type" => "whatsapp", "number" => "14157386170"],
            "message" => [
                "content" => [
                    "type" => "text",
                    "text" => $request->message
                ]
            ]
        ];

        $headers = ["Authorization" => "Basic " . base64_encode($request->api_key . ":" . $request->api_secret)];
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $url, ["headers" => $headers, "json" => $params]);
        $response->getBody();

        return redirect('/main/whatsapp')->with('success', 'Whatsapp has been sending!');
    }
}
