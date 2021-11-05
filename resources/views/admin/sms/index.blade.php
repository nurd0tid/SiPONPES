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
        <form method="POST" action="/main/sendSMS">
          @csrf
          <div class="card-header">
            <h4>SMS Gateway</h4>
          </div>
          <input type="hidden" name="api_key" value="{{ $sms[0]->api_key }}">
          <input type="hidden" name="api_secret" value="{{ $sms[0]->api_secret }}">
          <div class="card-body">
            <div class="form-group">
              <label>Recipent Number</label>
              <input type="text" name="to" class="form-control" value="62896xxxxxxxx" readonly>
            </div>
            <div class="form-group">
              <label>From</label>
              <input type="email" name="from" class="form-control" value="sender" readonly>
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
      <div class="card">
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
  @endif
@endpush
@endsection