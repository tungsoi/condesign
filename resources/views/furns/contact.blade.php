@extends('furns.layout')
@section('title', 'Tìm chuyến bay')
@section('content')
    <section class="ftco-section contact-section mr-top-60">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Thông tin liên hệ</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Địa chỉ:</span> Hà Nội</p>
                </div>
                <div class="col-md-3">
                    <p><span>Số điện thoại:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last pr-md-5">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Họ và tên">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Tiêu đề">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control"
                                placeholder="Nội dung"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Gửi " class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6">
                    <div id="map"></div>
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
