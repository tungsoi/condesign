@extends('furns.layout')
@section('title', 'Tìm chuyến bay')
@section('content')
    <section class="ftco-services bg-light">
        <div class="container">
            <div class="row">
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-idea"></span>
            </div>
            <div class="media-body p-2 mt-3">
            <h3 class="heading">THIẾT KẾ HOÀN HẢO</h3>
            <p>Tôn trọng tối đa ý kiến khách hàng đồng thời được gợi ý và lựa chọn phong cách nội thất phù hợp nhất.</p>
            </div>
        </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-compass-symbol"></span>
            </div>
            <div class="media-body p-2 mt-3">
            <h3 class="heading">THI CÔNG TRỌN GÓI</h3>
            <p>Là đơn vị thiết kế chuyên nghiệp, chúng tôi phụ trách tổng thể từ giai đoạn thiết kế và sản xuất.</p>
            </div>
        </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-layers"></span>
            </div>
            <div class="media-body p-2 mt-3">
            <h3 class="heading">NHÂN SỰ CHUYÊN NGHIỆP </h3>
            <p>Đội ngũ thiết kế gắn liền với thực tế sản xuất với bề dày kinh nghiệm hơn 6 năm nay.</p>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">Dự án của chúng tôi</h2>
            {{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p> --}}
          </div>
        </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="{{ asset('assets/decor/images/work-1.jpg') }}" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <h3>Thiết kế nội thất biệt thự</h3>
                        </div>
                        <a href="{{ asset('assets/decor/images/work-1.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="{{ asset('assets/decor/images/work-2.jpg') }}" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <h3>Thiết kế nội thất chung cư cao cấp</h3>
                        </div>
                        <a href="{{ asset('assets/decor/images/work-2.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="{{ asset('assets/decor/images/work-3.jpg') }}" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <h3>Thiết kế nội thất nhà phố</h3>
                        </div>
                        <a href="{{ asset('assets/decor/images/work-3.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="{{ asset('assets/decor/images/work-4.jpg') }}" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <h3>Thiết kế nội thất homestay</h3>
                        </div>
                        <a href="{{ asset('assets/decor/images/work-4.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">Công trình nổi bật
            </h2>
            {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p> --}}
        </div>
        </div>
        <div class="row">
        <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
            <a href="{{route('furn.product.detail',1)}}" class="block-20" style="background-image: url({{ asset('assets/decor/images/image_1.jpg') }});">
            </a>
            <div class="text d-flex py-4">
                <div class="meta mb-3">
                <div><a href="#">Sep. 20, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
                    <h3 class="heading"><a href="#">
                        Phong cách: Hiện Đại – Luxury.
                    </a></h3>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
            <a href="{{route('furn.product.detail',1)}}" class="block-20" style="background-image: url({{ asset('assets/decor/images/image_2.jpg') }});">
            </a>
            <div class="text d-flex py-4">
                <div class="meta mb-3">
                <div><a href="#">Sep. 20, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
                    <h3 class="heading"><a href="#">Phong cách: Tân cổ điển</a></h3>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
            <a href="{{route('furn.product.detail',1)}}" class="block-20" style="background-image: url({{ asset('assets/decor/images/image_3.jpg') }});">
            </a>
            <div class="text d-flex py-4">
                <div class="meta mb-3">
                <div><a href="#">Sep. 20, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
                    <h3 class="heading"><a href="#">Phong cách: Căn hộ chung cư</a></h3>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <section class="ftco-section ftc-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 order-md-last" style="background-image: url({{ asset('assets/decor/images/img.jpg') }});">
                </div>
                <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section mb-md-5 pl-md-5 heading-section-with-line">
                        <div class="pr-md-5 mr-md-5">
                            {{-- <span class="subheading">Perfect</span> --}}
                            <h2 class="mb-4">TẠI SAO CHỌN CONDESIGN?</h2>
                        </div>
                    </div>
                    <div class="pr-md-5 mr-md-5">
                        <p>Trong một thị trường nội thất ngày càng sôi động và đa dạng như ở Việt Nam, CONDESIGN luôn tự hào là đơn vị dẫn đầu và tạo ra xu hướng trong phong cách thiết kế Hiện Đại ( Theo tạp chí kiến trúc Việt Nam bình chọn ) các thiết kế của chúng tôi luôn hướng đến sự hài hoà giữa công năng sử dụng và thẩm mỹ, với ngôn ngữ thiết kế đồng nhất từ mảng khối cho đến màu sắc sao cho mỗi không gian sống luôn là đứa con tinh thần, là nơi mà bạn muốn trở về sau cuối ngày làm việc mệt mỏi.</p>
                        <p>Phong thủy luôn là yếu tố được cân nhắc đầu tiên trong thiết kế nội thất hiện đại của CONDESIGN, nhằm việc tạo không gian sống phù hợp với tuổi, mệnh của gia chủ, giúp hạn chế điềm xấu, tài vận sinh sôi.
                        </p>
                            {{-- <p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
