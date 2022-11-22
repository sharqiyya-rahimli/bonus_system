@extends('app')
@section('main_content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/bg_2.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Bizimlə Əlaqə</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Əsas Səhifə <i class="ion-ios-arrow-forward"></i></a></span> <span>Əlaqə <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section">
<div class="container">
    <div class="row d-flex mb-5 contact-info">
    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="bg-info align-self-stretch box p-4 text-center">
            <a class="contact-info-item" style="font-size: 3rem;" class="mb-4" href="https://goo.gl/maps/i46vMn7Sv8uRdW7x9" target="_blank"><i class="icon icon-map-marker"></i></a>
            <p class="contact-info-item" style="font-size: 18px">Yasamal r, Hüseyn Cavid 147, Elmlər Ak. metrosu</p>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="bg-info align-self-stretch box p-4 text-center">
            <a class="contact-info-item" style="font-size: 4rem;" href="tel:+994774344819"class="mb-4 btn"><i class="icn icon-phone"></i>
            <p class="contact-info-item" style="font-size: 18px">+994 77 434 48 19</p></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="bg-info align-self-stretch box p-4 text-center">
            <a class="contact-info-item" style="font-size: 4rem;" href="mail:robototexnikakurslari@gmail.com" class="mb-4 btn"><i class="icon icon-envelope"></i>
            <p class="contact-info-item" style="font-size: 13px">robototexnikakurslari@gmail.com</p></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="bg-info align-self-stretch box p-4 text-center">
            <a class="contact-info-item" style="font-size: 4rem" href="https://www.instagram.com/robototexnikakurslari/" target="_blank" class="mb-4 btn"><i class="icon-instagram"></i>
            <p class="contact-info-item" style="font-size: 18px">@robototexnikakurslari</p></a>
        </div>
    </div>
    </div>
</div>
<div class="container">
    <div class="row d-flex align-items-stretch no-gutters">
        <div class="col-lg-6 col-md-8 p-4 p-md-5 order-md-last contact-form bg-light mx-auto">
            @if ($errors->any() and !$errors->any()=='g-recaptcha-response')
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success text-center">
                    {{session('success')}}
                </div>
            @endif
            <form id="contact-form" action="{{route('contact.post')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input id="name" required maxlength="20" oninput="nameControl($(this).val())" type="text" value="{{old('name')}}" class="form-control" name="name" placeholder="Ad Soyad">
                <span id="nameinvalid" class="invalid-feedback text-center"></span>
            </div>
            <div class="form-group">
                <input id="email" required maxlength="50" oninput="emailControl($(this).val())" type="email" value="{{old('email')}}" class="form-control" name="email" placeholder="email adresi">
                <span id="emailinvalid" class="invalid-feedback text-center"></span>
            </div>
            <div class="form-group">
                <input id="number" required oninput="numberControl($(this).val())" type="number" value="{{old('phone')}}" class="form-control" name="phone" placeholder="Telefon Nömrəniz">
                <span id="numberinvalid" class="invalid-feedback text-center"></span>
            </div>
            <div class="form-group">
                <textarea id="message" required oninput="messageControl($(this).val())" cols="30" rows="3" name="message" class="form-control rounded" placeholder="Mesajınız">{{old('message')}}</textarea>
                <span id="messageinvalid" class="invalid-feedback text-center"></span>
            </div>
            <div class="form-group text-center">
                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                @endif
                <div class="col-md-8 col-sm-6 mx-auto" aria-required="true">
                    {!! Recaptcha::render() !!}
                </div>
            </div>
            <div class="form-group text-center">
                <input id="submit" type="submit" value="Göndər" class="btn btn-primary py-3 px-5">
            </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection
@section('css')
@endsection
@section('js')
@endsection