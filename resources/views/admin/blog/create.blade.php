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
            <h4>Add Article</h4>
          </div>
          <form action="/main/blog" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Title</label>
                <input type="text" class="form-control  @error('title')is-invalid @enderror" id="title" name="title" 
                value="{{ old('title') }}" autofocus>
                  @error('title')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror 
              </div>
              <div class="form-group col-md-6">
                <label>Slug</label>
                <input type="text" class="form-control @error('slug')is-invalid @enderror" id="slug" value="{{ old('slug') }}" name="slug" readonly>
                  @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror   
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label>Status</label>
                <select class="form-control selectric" name="status">
                  <option value="Publish">Publish</option>
                  <option value="Draf">Draft</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label>Category</label>
                <select class="form-control selectric" name="category_id">
                  @foreach ($categories as $category)
                    @if (old('category_id') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>                    
                      @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option> 
                      @endif

                    @endforeach
                </select>  
              </div>
              <div class="form-group col-md-4">
                <label>Tags</label>
                  <input type="text" value="{{ old('tags') }}" class="form-control inputtags" name="tags" placeholder="Jhon, Doe, More,">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>File Browser</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input  @error('image')is-invalid @enderror" id="image" name="image">
                  <label class="custom-file-label" for="image">Choose file</label>
                  @error('image')
                  <div class="invalid-feedback mt-2">
                    {{ $message }}
                  </div>
                  @enderror  
                </div>
              </div>
              <div class="form-group col-md-6">
                <label>Content Article</label>
                <textarea class="summernote" value="{{ old('content') }}" name="content"></textarea>
                @error('content')
                 <p class="text-danger">{{ $message }}</p>
                @enderror  
              </div>
            </div>
            <div class="form-group row mb-4">
              <div class="col-sm-12 col-md-7">
                <button type="submit" class="btn btn-primary">Create Article</button>
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