@extends('app')
@section('js')
@endsection
@section('main_content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/bg_2.jpg')}});">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Məqalələr</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Əsas Səhifə <i class="ion-ios-arrow-forward"></i></a></span> <span>Məqalələr <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row">
      @foreach ($articles as $article)
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="{{route('article.single',$article->slug)}}" class="block-20 d-flex align-items-end rounded" style="background-image: url({{$article->image}});">
              <div class="meta-date text-center p-2">
                <span class="day">{{ $article->created_at->format('d') }}</span>
                <span class="mos">{{ $article->created_at->format('M') }}</span>
                <span class="yr">{{ $article->created_at->format('Y') }}</span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="{{route('article.single',$article->slug)}}">{{$article->name}}</a></h3>
              {!!str_limit($article->content,205)!!}
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row no-gutters my-5 d-flex justify-content-center">
        <div class="block-27">
          <div class="d-flex justify-content-center">
            {{$articles->links()}}
          </div>
        </div>
    </div>
  </div>
</section>
@endsection
@section('css')
@endsection