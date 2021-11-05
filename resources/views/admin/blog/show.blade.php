@extends('layouts.app')
@section('container')
<section class="section">
<div class="section-body">
  <div class="col-12 col-md-4 col-lg-12">
    <article class="article article-style-c">
      <div class="article-header">
        <div class="article-image" data-background="{{ asset('storage/' . $blog->image ) }}">
        </div>
      </div>
      <div class="article-details">
        <div class="article-category"><a href="/main/blog">Back To All Article</a>
          <div class="bullet"></div> <a href="/main/blog/{{ $blog->slug }}/edit">Edit Article</a>
        </div>
        <div class="article-title">
          <h2><a href="#">{{ $blog->title }}</a></h2>
        </div>
        {!! $blog->content !!}
      </div>
    </article>
  </div>
</div>
</section>
@endsection