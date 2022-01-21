@extends('furns.layout')
@section('title', 'Tìm chuyến bay')
@section('content')
<section class="ftco-section">
    <div class="container-fluid">
        <div class="row no-gutters">
            @foreach ($data as $item )
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <a href="{{route('furn.projects.detail',$item['id'])}}">
                            <img src="{{ URL::asset('/uploads/'.$item['img']) }}" class="img-fluid" alt="Colorlib Template">
                            <div class="text">
                                <h3>{{$item['title']}}</h3>
                            </div>
                            {{-- <a href="{{ URL::asset('/uploads/'.$item['img']) }}" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="icon-expand"></span>
                            </a>    --}}
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


