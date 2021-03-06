@extends('furns.layout')
@section('title', 'Tìm chuyến bay')
@section('content')
    {{-- <section class="ftco-section ftc-no-pb">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-md-10">
                <div class="row no-gutters">
                    <div class="col-md-5 p-md-5 img img-2 order-md-last" style="background-image: url({{ asset('assets/decor/images/work-2.jpg') }});">
                    </div>
                    <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
              <div class="heading-section mb-md-5 pl-md-5 heading-section-with-line">
                  <div class="pr-md-5 mr-md-5">
                      <span class="subheading">Services</span>
                    <h2 class="mb-4">We Make Perfection</h2>
                </div>
              </div>
              <div class="pr-md-5 mr-md-5">
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                            <p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    @foreach ($service as $key => $item)
        <section class="ftco-section ftc-no-pb mr-top-60">
            <div class="container">
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-10">
                        <div class="row no-gutters">
                            <div class="col-md-5 p-md-5 img img-2 {{ $key % 2 == 0 ? 'order-md-last' : '' }}"
                                style="background-image: url({{ URL::asset('/uploads/' . $item['pictures'][0]) }});">
                            </div>
                            <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
                                <div
                                    class="heading-section {{ $key % 2 == 0 ? 'mb-md-5' : 'mb-5' }}  pl-md-5 heading-section-with-line">
                                    <div class="{{ $key % 2 == 0 ? 'pr-md-5 mr-md-5' : 'pl-md-5 ml-md-5' }}">
                                        <span class="subheading">Dịch vụ</span>
                                        <h2 class="mb-4">{{ $item['title'] ?? '' }}</h2>
                                    </div>
                                </div>
                                <div class="{{ $key % 2 == 0 ? 'pr-md-5 mr-md-5' : 'pl-md-5 ml-md-5 mb-5' }}">
                                    {!! $item['description'] ?? '' !!}
                                    <p>
                                        <a href="{{ route('furn.service.detailService', $item['id']) }}"
                                            class="btn-custom">Chi tiết <span class="ion-ios-arrow-forward"></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
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
