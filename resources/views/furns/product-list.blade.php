@extends('furns.layout')
@section('title', 'Tìm chuyến bay')
@section('content')
    <section class="ftco-section  mr-top-60">
        <div class="container-fluid">
            <div class="row no-gutters">
                @foreach ($data as $item)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="project">
                            <a href="{{ route('furn.projects.detail', $item['id']) }}">
                                <img src="{{ URL::asset('/uploads/' . $item['img']) }}" class="img-fluid"
                                    alt="Colorlib Template">
                                <div class="text">
                                    <h3>{{ $item['title'] }}</h3>
                                </div>
                                {{-- <a href="{{ URL::asset('/uploads/'.$item['img']) }}" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="icon-expand"></span>
                            </a> --}}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    {{ $data->links() }}
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
