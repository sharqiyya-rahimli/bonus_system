@extends('app')
@section('js')
@endsection
@section('main_content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{$about->bg_image}}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Haqqımızda</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Əsas Səhifə <i class="ion-ios-arrow-forward"></i></a></span> <span>Haqqımızda <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
                @if($about->title)<div class="text-center">{!!$about->title!!}</div>@endif
                <div class="row mt-5">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-teacher"></span></div>
                            <div class="text">
                                <h3>Təcrübəli Müəllimlər</h3>
                                <p>Uşaqlarınıza xüsusi qayğı ilə yanaşacaq, texnologiyanın bütün sirlərini onlara öyrədəcək.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                            <div class="text">
                                <h3>Xüsusi Metodlar</h3>
                                <p>Uşaqlar üçün anlaşılan və xüsusi metodlardan istifadə edərək bu qəliz sahəni onlar üçün əyləncəli və asan anlaşılan edirik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-books"></span></div>
                            <div class="text">
                                <h3>Əyani vəsaitlər</h3>
                                <p>Onlar üçün hazırladığımız dərsliklər və dərs proqramı ilə daha da zəngin məlumat almalarına müvəffəq oluruq.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                            <div class="text">
                                <h3>Seritifikat</h3>
                                <p>Kursu bitirdikdən sonra xüsusi sertifikat ilə təmin edirik.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                {!!$about->content!!}
                </div>
            </div>
        </div>
    </div>
</section>
@if ($images->all())
<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
        @foreach ($images as $image)
        <div class="col-md-3 ftco-animate">
          <div class="hover">
            <div id="figure">
              <a href="{{$image->image}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{$image->image}});"></a>
            </div>
          </div>
        </div>
        @endforeach
        </div>
    </div>
</section>
@endif
@endsection
@section('css')
@endsection