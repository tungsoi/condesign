@extends('furns.layout')
@section('title', 'Tìm chuyến bay')
@section('content')
    <section class="ftco-section mr-top-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <h2 class="mb-3">{{ $project->title }}</h2>
                    <p>
                        {!! $project->description !!}
                    </p>

                    <div class="row">
                        @foreach ($project->pictures as $img)
                            <div class="col-md-6 col-lg-6 ftco-animate mr-bottom-20">
                                <img src="{{ URL::asset('/uploads/' . $img) }}" class="img-fluid">
                            </div>
                        @endforeach
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
