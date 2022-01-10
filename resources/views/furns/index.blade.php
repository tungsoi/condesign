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
            <h3 class="heading">TƯ VẤN TRỌN GÓI - CHỦ ĐỘNG CÙNG KHÁCH HÀNG</h3>
            <p>CONDESIGN luôn tôn trọng tối đa cá tính và ý kiến của bạn trong từng thiết kế với gói tư vấn, gợi ý lựa chọn phong cách nội thất phù hợp, gắn liền với sở thích và các sản phẩm trang trí trong tổ ấm.</p>
            </div>
        </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-compass-symbol"></span>
            </div>
            <div class="media-body p-2 mt-3">
            <h3 class="heading">THIẾT KẾ TINH TẾ - THI CÔNG CHẤT LƯỢNG</h3>
            <p>Với kinh nghiệm nhiều năm hoạt động trong lĩnh vực thi công nội/ngoại thất, CONDESIGN tự tin sẽ mang đến những giải pháp thiết kế được cập nhật mới, mang phong cách riêng cùng chất lượng thi công cao nhất, tạo nên sự trải nghiệm khác biệt dành cho khách hàng.</p>
            </div>
        </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-layers"></span>
            </div>
            <div class="media-body p-2 mt-3">
            <h3 class="heading">NHÂN SỰ CHUYÊN NGHIỆP - CÓ TÂM, CÓ TẦM</h3>
            <p>CONDESIGN luôn đề cao trải nghiệm của mỗi gia đình với tầm nhìn chiến lược trở thành Đơn vị hàng đầu trong lĩnh vực Thiết kế & Thi công nội/ngoại thất tại Việt Nam.</p>
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
                            <h3>BIỆT THỰ</h3>
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
                            <h3>CHUNG CƯ CAO CẤP</h3>
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
                            <h3>NHÀ PHỐ</h3>
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
                            <h3>KHÁCH SẠN/HOMESTAY</h3>
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
                {{-- <div class="meta mb-3">
                <div><a href="#">Sep. 20, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div> --}}
                <div class="desc pl-3">
                    <h3 class="heading"><a href="#">
                        PHONG CÁCH HIỆN ĐẠI - RUSTIC
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
                {{-- <div class="meta mb-3">
                <div><a href="#">Sep. 20, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div> --}}
                <div class="desc pl-3">
                    <h3 class="heading"><a href="#">PHONG CÁCH TÂN CỔ ĐIỂN</a></h3>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
            <a href="{{route('furn.product.detail',1)}}" class="block-20" style="background-image: url({{ asset('assets/decor/images/image_3.jpg') }});">
            </a>
            <div class="text d-flex py-4">
                {{-- <div class="meta mb-3">
                <div><a href="#">Sep. 20, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div> --}}
                <div class="desc pl-3">
                    <h3 class="heading"><a href="#">PHONG CÁCH BẮC ÂU</a></h3>
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
                       <p>1. Chuyên môn nội thất với hơn 10 năm kinh nghiệm tư vấn và triển khai đa dạng các công trình lớn nhỏ trên cả nước. </p>
                        <p>2. Đội ngũ kiến trúc sư đông đảo, sáng tạo và nhanh nhạy với xu hướng, tự tin có thể thiết kế được đa dạng phong cách nội thất được ưa chuộng nhất hiện nay: Hiện đại, Rustic, Scandinavian, Indochine, Tân cổ điển,...</p>
                        <p>3. Uy tín đặt lên hàng đầu, khẳng định bằng sự tin tưởng và tín nhiệm sử dụng chất lượng sản phẩm, dịch vụ của hàng trăm khách hàng trên cả nước trong 10 năm qua.</p>
                        <p>4. Thiết kế khác biệt tạo không gian độc bản cho từng gia chủ nhờ sở hữu Phòng mua riêng biệt, không ngừng học hỏi, tìm tòi để mang sự mới lạ, độc đáo vào từng không gian sống.</p>
                        <p>5. Ưu tiên bố trí nội thất theo màu sắc và phong thủy, bắt nguồn từ kinh nghiệm và hoạt động đào tạo chuyên sâu, giúp khách hàng luôn có được những trải nghiệm sống thoải mái và an tâm nhất. </p>
                        <p>6. Tập trung vào các sản phẩm chất lượng cao, mang tính đột phá, giúp gia chủ tối ưu chi phí một cách hiệu quả nhất.</p>
                           {{-- <p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
