@extends('furns.layout')
@section('title', 'Condesign')
@section('content')
<section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ftco-animate">
            <h2 class="mb-3">{{ $service['title'] ?? null }}</h2>
            <p>
                {!! $service['description'] ?? null !!}
            </p>

            {{-- <div class="row">
                @foreach ($service->pictures as $img )
                    <div class="col-md-6 col-lg-6 ftco-animate mr-bottom-20">
                        <img src="{{ URL::asset('/uploads/'.$img) }}" class="img-fluid">
                    </div>
                @endforeach
            </div> --}}
        </div>
    </div>
  </section>
@stop


