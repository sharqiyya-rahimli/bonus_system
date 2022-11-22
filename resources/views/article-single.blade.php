@extends('app')
@section('js')
@endsection
@section('main_content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/bg_2.jpg')}});">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">{{$thisarticle->name}}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Əsas Səhifə <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{route('articles')}}">Məqalələr <i class="ion-ios-arrow-forward"></i></a></span></p>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section">
<div class="container">
  <div class="row">
    <div class="col-lg-8 ftco-animate">
        <div class="mb-3 text-center">{!!$thisarticle->title!!}
        <img src="{{asset($thisarticle->image)}}" class="border border-{{$colors[rand(0,5)]}} rounded img-fluid">
        </div>
        {!!$thisarticle->content!!}
    </div>
    @if ($articles)
    <div class="col-lg-4 sidebar ftco-animate">
      <div class="sidebar-box ftco-animate otherart">
      <h3 class="text-{{$colors[rand(0,5)]}} text-center">Digər Məqalələr</h3><hr>
      @foreach ($articles as $article)
      <div class="block-21 mb-4 d-flex grow">
          <a href="{{route('article.single',$article->slug)}}" class="blog-img mr-4 rounded" style="background-image: url({{asset($article->image)}});"></a>
          <div class="text">
          <h3 class="heading"><a href="{{route('article.single',$article->slug)}}">{{$article->name}}</a></h3>
          <div class="meta">
              <div><span class="icon-calendar"></span> {{ $article->created_at->format('M') }}. {{ $article->created_at->format('d') }}, {{ $article->created_at->format('Y') }}</div>
          </div>
          </div>
      </div>
      @endforeach
      </div>
    </div>
    @endif
  </div>
</div>
</section>
@endsection
@section('css')
@endsection