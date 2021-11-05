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
        <form method="POST" action="/main/sms">
          @csrf
          <div class="card-header">
            <h4>API Key</h4>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label>Nexmo Key</label>
              <input type="text" name="api_key" class="form-control @error('api_key')is-invalid @enderror">
                @error('api_key')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror             
            </div>
            <div class="form-group">
              <label>Nexmo Secret</label>
              <input type="text" name="api_secret" class="form-control @error('api_secret')is-invalid @enderror">
                @error('api_secret')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror                
            </div>
          </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary">Setup Credentials</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Message API KEY</h4>
        </div>
        <div class="card-body">
            <p>For SMS, MMS, Facebook, WhatsApp, Viber and much more: Messages API allows easy integration with multiple messaging platforms through a single integration. This API is currently in Beta, so expect some changes before it is production-ready.</p>
            <table class="table table-hover">
                <thead>
                  <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nexmo Key</th>
                    <th scope="col">Nexmo Secret</th>
                    <th scope="col">Action</th>
                  </tr>
                  <tbody>
                    @foreach ($sms as $sms)
                    <tr class="text-center">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $sms->api_key }}</td>
                      <td>{{ $sms->api_secret }}</td>
                      <td>
                        <form action="/main/sms/{{ $sms->id }}" method="post">
                            @method('delete')
                            @csrf                           
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                        </form>                       
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </thead>
            </table>
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
  @elseif (session()->has('warning'))
  <script>
      $(function() {
      iziToast.warning({
        title: 'Whoops!',
        message: '{{ session("warning") }}.',
        position: 'topRight'
      });      
    });
  </script>     
  @endif
@endpush
@endsection