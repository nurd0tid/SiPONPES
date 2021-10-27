@extends('layouts.app')
@section('container')
@push('css-datatables')
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
<div class="breadcrumbbar">
  <div class="row align-items-center">
    <div class="col-md-8 col-lg-8">
      <h4 class="page-title">Datatable</h4>
      <div class="breadcrumb-list">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page">Datatable</li>
        </ol>
      </div>
    </div>
    <div class="col-md-4 col-lg-4">
      <div class="widgetbar">
        <button class="btn btn-primary">Add Widget</button>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
  <!-- Start row -->
  <div class="row">
    <!-- Start col -->
    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-header">
          <h5 class="card-title">Data Export Table</h5>
        </div>
        <div class="card-body">
          <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
          <div class="table-responsive">
            <table id="datatable-buttons" class="table table-hover table-bordered">
              <thead>
                <tr style="text-align: center;">
                  <th style="width: 5px;">#</th>
                  <th>Tittle</th>
                  <th>Cateogry</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($news as $news)
                <tr style="text-align: center;">
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $news->title }}</td>
                  <td>{{ $news->category }}</td>
                  <td>
                    <a href="/news/{{ $news->slug }}" class="btn btn-outline-info"><i class="feather icon-eye"></i></i></a>
                    <a href="/news/{{ $news->id }}" class="btn btn-outline-warning"><i class="feather icon-edit"></i></i></a>
                    <a href="/news/{{ $news->id }}" class="btn btn-outline-danger"><i class="feather icon-edit"></i></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- End col -->
  </div>
  <!-- End row -->
</div>
@push('js-datatables')
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-table-datatable.js') }}"></script>
@endpush
@endsection()