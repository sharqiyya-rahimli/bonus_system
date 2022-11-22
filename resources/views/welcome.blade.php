@extends('app')
@section('js')
@endsection
@section('main_content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(frontend/images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(frontend/images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-services ftco-no-pb">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-teacher"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Təcrübəli Müəllimlər</h3>
                            <p>Uşaqlarınıza xüsusi qayğı ilə yanaşacaq, texnologiyanın bütün sirlərini onlara öyrədəcək</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-books"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Əyani vəsaitlər</h3>
                            <p>Onlar üçün hazırladığımız dərsliklər və dərs proqramı ilə daha da zəngin məlumat almalarına müvəffəq oluruq </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-reading"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Xüsusi Metodlar</h3>
                            <p>Uşaqlar üçün anlaşılan və xüsusi metodlardan istifadə edərək bu qəliz sahəni onlar üçün əyləncəli və asan anlaşılan edirik</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-diploma"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Seritifikat</h3>
                            <p>Kursu bitirdikdən sonra xüsusi sertifikat ilə təmin edirik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css')
@endsection