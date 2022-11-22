@extends('app')
@section('js')
@endsection
@section('main_content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/bg_2.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Kurslarımız</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="{{route('index')}}">Əsas Səhifə <i class="ion-ios-arrow-forward"></i></a></span>
            <span>Kurslar <i class="ion-ios-arrow-forward"></i></span>
          </p>
        </div>
      </div>
    </div>
  </section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach ($courses as $course)
            <div class="col-md-6 course d-lg-flex ftco-animate">
                @if ($course->image)
                <div class="img rounded" style="background-image: url({{$course->image}});"></div> 
                @endif
                <div class="text bg-light p-4 rounded mx-auto">
                    <h3 class="text-info">{{$course->name}}</h3>
                    @if($course->class_time)
                    <p class="subheading"><span>Class time:</span> {{$course->class_time}}</p>
                    @endif
                    @if ($course->subject) {!!$course->subject!!} @endif
                </div>
            </div>    
            @endforeach
        </div>
    </div>
</section>
@endsection
@section('css')
@endsection
