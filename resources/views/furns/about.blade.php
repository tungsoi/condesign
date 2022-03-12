@extends('furns.layout')
@section('title', 'Tìm chuyến bay')
@section('content')
    <section class="ftc-no-pb mr-top-60" id="">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2"
                    style="background-image: url({{ URL::asset('/uploads/' . $introduce['img']) }});">
                </div>
                <div class="col-md-7 wrap-about pb-md-5 pt-5 ftco-animate">
                    <div class="heading-section mb-5 pl-md-5 heading-section-with-line">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading">Về chúng tôi</span>
                            <h2 class="mb-4 text-justify ">{{ $introduce['title'] ?? '' }}</h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5 text-justify ">
                        {!! $introduce['description'] ?? '' !!}
                        {{-- <p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftc-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 order-md-last"
                    style="background-image: url({{ URL::asset('/uploads/' . $reason['img']) }});">
                </div>
                <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section mb-md-5 pl-md-5 heading-section-with-line">
                        <div class="pr-md-5 mr-md-5">
                            {{-- <span class="subheading">Perfect</span> --}}
                            <h2 class="mb-4">{{ $reason['title'] ?? '' }}</h2>
                        </div>
                    </div>
                    <div class="pr-md-5 mr-md-5 text-justify">
                        {!! $reason['description'] ?? '' !!}
                        {{-- <p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
<style>
    #ftco-navbar {
        margin-top: 0px !important;
        position: fixed;
        right: 0;
        left: 0;
        top: 0;
        margin-top: -130px;
        background: #fff !important;
        -webkit-box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);
        box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);
    }

    .ftco-navbar-light {
        color: #000000 !important;
    }

    .ftco-navbar-light .navbar-brand {
        color: #000000 !important;
    }

    .ftco-navbar-light .nav-link {
        color: #000000 !important;
    }

    .mr-top-60 {
        margin-top: 60px;
    }

</style>
