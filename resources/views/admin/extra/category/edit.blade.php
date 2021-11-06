@extends('layouts.app')
@section('container')
@push('css-summernote')
  <link rel="stylesheet" href="{{ asset('assets/bundles/jquery-selectric/selectric.css') }}">
@endpush
<section class="section">
  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Add Category</h4>
          </div>
          <form action="/extra/category/{{ $categories->slug }}" method="post">
            @method('put')
            @csrf
          <div class="card-body">
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Category</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control  @error('name')is-invalid @enderror" id="name" name="name" 
                value="{{ old('name', $categories->name ) }}" autofocus>
                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror                
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control @error('slug')is-invalid @enderror" id="slug" value="{{ old('name', $categories->slug ) }}" name="slug" readonly>
                  @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror                  
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                <button type="submit" class="btn btn-primary">Update Category</button>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@push('js-summernote')
    <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
@endpush
@push('js-page')
    <script>
      const title = document.querySelector('#name');
      const slug = document.querySelector('#slug');

      title.addEventListener('change', function () {
        fetch('/extra/category/checkSlug?title=' + title.value)
         .then(response => response.json())
          .then(data => slug.value =  data.slug)
      });
    </script>
@endpush
@endsection