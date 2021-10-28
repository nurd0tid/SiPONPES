@extends('layouts.app')
@section('container')
@push('css-summernote')
  <link rel="stylesheet" href="{{ asset('assets/bundles/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/jquery-selectric/selectric.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush
<section class="section">
  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Full Summernote</h4>
          </div>
          <div class="card-body">
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-1">Title</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" id="title" name="title">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-1">Slug</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" id="slug" name="slug" readonly>
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-1">Status</label>
              <div class="col-sm-12 col-md-7">
                <select class="form-control selectric">
                  <option>Publish</option>
                  <option>Draft</option>
                </select>
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-1">Category</label>
              <div class="col-sm-12 col-md-7">
                <select class="form-control selectric">
                  <option>Tech</option>
                  <option>News</option>
                  <option>Political</option>
                </select>
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-1">Tags</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control inputtags">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-1">Content</label>
              <div class="col-sm-12 col-md-7">
                <textarea class="summernote"></textarea>
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-1"></label>
              <div class="col-sm-12 col-md-7">
                <button class="btn btn-primary">Create Article</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@push('js-summernote')
    <script src="{{ asset('assets/bundles/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
@endpush
@push('js-page')
    <script>
      $(".inputtags").tagsinput('items');
    </script>
    <script>
      const title = document.querySelector('#title');
      const slug = document.querySelector('#slug');

      title.addEventListener('change', function () {
        fetch('/main/blog/checkSlug?title=' + title.value)
         .then(response => response.json())
          .then(data => slug.value =  data.slug)
      });
    </script>
@endpush
@endsection