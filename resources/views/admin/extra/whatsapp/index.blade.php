@extends('layouts.app')
@section('container')
@push('css-toast')
    <link rel="stylesheet" href="{{ asset('assets/bundles/izitoast/css/iziToast.min.css') }}">
@endpush
<section class="section">
<div class="section-body">
  <div class="row">
    <div class="col-12 col-md-6  col-lg-6">
      <div class="card">
        <form method="POST" action="/extra/sendWhatsapp">
          @csrf
          <div class="card-header">
            <h4>Whatsapp Gateway</h4>
          </div>
          <input type="hidden" name="api_key" value="{{ $sms[0]->api_key }}">
          <input type="hidden" name="api_secret" value="{{ $sms[0]->api_secret }}">
          <div class="card-body">
            <div class="form-group">
              <label>Recipent Number</label>
              <input type="text" name="to" class="form-control" required>
            </div>
            <div class="form-group">
              <label>From</label>
              <input type="email" name="from" class="form-control" value="SiPONPES" readonly>
            </div>
            <div class="form-group mb-0">
              <label>Message</label>
              <textarea class="form-control" name="message" required=""></textarea>
            </div>
          </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card card-success">
        <div class="card-header">
          <h4>Documentation</h4>
        </div>
        <div class="card-body">
            <p>Hello, all of these SMS gateway menus use a package called <b>Nexmo</b> which you can register <a href="https://dashboard.nexmo.com/">Here</a>, because using this free feature you can only send SMS when your account and mobile number are registered with <b>Nexmo</b>.</p>
            <p>If you want to send free you can upgrade your nexmo account, here I just explain the logic
            You can see the full <a href="https://dashboard.nexmo.com/" class="badge badge-success">Documentation Here</a>.</p>

            <p>In the <b>Recipent Number</b>, please replace it with your cellphone number, if you are a <b>Nexmo</b> subscription feature, you can leave <b><i>readonly on my script</i></b> so that it can be filled with something else
            for delivery (<b>sender</b>) it's because it's free, adjust it if you use paid features.</p>

            <button type="button" class="btn btn-light btn-icon icon-left mt-3">
              <i class="fab fa-github"></i> <a href="https://github.com/nexmo" class="badge badge-light">Github Nexmo</a></span>
            </button>
            <button type="button" class="btn btn-light btn-icon icon-left mt-3">
              <i class="fab fa-github"></i> <a href="https://github.com/nurd0tid" class="badge badge-light">Github Me</a></span>
            </button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card card-success">
      <div class="card-header">
        <h4>How To Use Whatsapp Gateway</h4>
      </div>
      <div class="card-body">
        <h6>WhatsApp Qr Code</h6>
        <div>
          <div class="mt-2 mb-2 bg-whitesmoke">
            <center><img src="{{ asset('assets/img/qr.png') }}" style="width: 150px; height: 150px;"/></center>
          </div>
        </div>
          <p>Scan the QR code, <a href="https://web.whatsapp.com/send?phone=14157386170&text=Join%20buck%20slob">or click this link <i class="far fa-copy"></i></a> , and hit send on the pre-filled message.</p>

          <p>Here we need to allow the public URL to access the dev platform or on our local in order to receive incoming webhooks for two-way messaging communication. For that, we will use ngrok. If you don't have ngrok, please visit the official website at <a href="https://ngrok.com">ngrok.com</a>, then proceed with registering and after being directed to the <a href="https://dashboard.ngrok.com/get-started/setup">dashboard page</a>, please download ngrok.</p>

          <p>After successfully downloading ngrok, please install ngrok first with the steps as shown on the <a href="https://dashboard.ngrok.com/get-started/setup">setup & installation page.</a></p>

          <h6>*Setup ngrok on windows:</h6>
          <ol>
            <li>Download ngrok</li>
            <li>Unzip or double click on ngrok.zip</li>
            <li>Run <b>ngrok.exe</b></li>
            <li>Connect ngrok with your ngrok account with the <b>"ngrok authtoken tokenandaxxxxx"</b> command on <b>ngrok.exe</b>
              authtoken can be found on the setup & installation page no. 2.</li>
            <li>Start ngrok with the command <b>"ngrok http 8000"</b> or whatever port is running in your project. <i>For example if your laravel project is running on port 8090 (url: 127.0.0.1:8090)</i> then you have to run ngrok with the command ngrok http 8090.</li>
          </ol>
          <p>Webhook configuration. For webhook configuration, we need https URL "forwarding" which we can get in the previous step. Please copy the https "forwarding" URL and paste it in the inbound and status form as shown above then click save webhooks. If you fail (access denied) in the save process or when you click save webhooks, please try reloading the website page (Perhaps your login session has expired).</p>

          <h6> Webhooks URL format : </h6>
          <ol>
            <li>Inbound Example: http://port.ngrok.io/webhooks/inbound</li>
            <li>Status Example: http://port.ngrok.io/webhooks/status</li>
          </ol>
          <button type="button" class="btn btn-light btn-icon icon-left mt-3">
            <i class="fab fa-github"></i> <a href="https://github.com/nexmo" class="badge badge-light">Github Nexmo</a></span>
          </button>
          <button type="button" class="btn btn-light btn-icon icon-left mt-3">
            <i class="fab fa-github"></i> <a href="https://github.com/nurd0tid" class="badge badge-light">Github Me</a></span>
          </button>
      </div>
    </div>
  </div>
</div>
</section>
@push('js-toast')
  <script src="{{ asset('assets/bundles/izitoast/js/iziToast.min.js') }}"></script>
@endpush
@push('popup-toast')  
  @if (session()->has('success'))
  <script>
      $(function() {
      iziToast.success({
        title: '👋',
        message: '{{ session("success") }}.',
        position: 'topRight'
      });      
    });
  </script>     
  @elseif (session()->has('error'))
  <script>
      $(function() {
      iziToast.error({
        title: 'Whoops!',
        message: '{{ session("error") }}.',
        position: 'topRight'
      });      
    });
  </script>     
  @endif
@endpush
@endsection