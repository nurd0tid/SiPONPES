@extends('layouts.app')
@section('container')
@push('css-datatables')
  <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
@endpush
@push('css-toast')
    <link rel="stylesheet" href="{{ asset('assets/bundles/izitoast/css/iziToast.min.css') }}">
@endpush
<section class="section">
  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Basic DataTables</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>
                  <tr class="text-center">
                    <th style="width: 4px;">
                      #
                    </th>
                    <th>Name Category</th>
                    <th>Slug Category</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                      <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                          <form action="/extra/category/{{ $category->slug }}" method="post">
                              @method('delete')
                              @csrf
                              <a href="/extra/category/{{ $category->slug }}/edit" class="btn btn-sm btn-primary ml-1"><i class="fas fa-edit"></i></a>                              
                              <button class="btn btn-sm btn-danger ml-1" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                          </form>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@push('js-datatables')
  <script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/js/page/datatables.js') }}"></script>
@endpush  
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