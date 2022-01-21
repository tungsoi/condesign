<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('furn.home')}}">condesign</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a href="{{route('furn.home')}}" class="nav-link {{ request()->is('/') ? 'active' : ''}}">Trang chủ</a></li>
                <li class="nav-item"><a href="{{route('furn.about')}}" class="nav-link {{ request()->is('about') ? 'active' : ''}}">Giới thiệu</a></li>
                <li class="nav-item"><a href="{{route('furn.projects')}}" class="nav-link {{ request()->is('projects') ? 'active' : ''}}">Dự án</a></li>
                <li class="nav-item"><a href="{{route('furn.service')}}" class="nav-link {{ request()->is('service') ? 'active' : ''}}">Dịch vụ</a></li>
                <li class="nav-item"><a href="{{route('furn.contact')}}" class="nav-link {{ request()->is('contact') ? 'active' : ''}}">Liên hệ</a></li>
            </ul>
        </div>
    </div>
</nav>
