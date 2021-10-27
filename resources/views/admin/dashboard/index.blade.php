@extends('layouts.app')
@section('container')
<div class="breadcrumbbar">
  <div class="row align-items-center">
    <div class="col-md-8 col-lg-8">
      <h4 class="page-title">Starter</h4>
      <div class="breadcrumb-list">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Basic Pages</a></li>
          <li class="breadcrumb-item active" aria-current="page">Starter</li>
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
<div class="contentbar">
  <!-- Start row -->
  <div class="row">
    <!-- Start col -->
    <div class="col-md-12 col-lg-12 col-xl-12">
      <div class="text-center mt-3 mb-5">
        <h4>Page Title</h4>
      </div>
    </div>
    <!-- End col -->
  </div>
  <!-- End row -->
</div>
@endsection()