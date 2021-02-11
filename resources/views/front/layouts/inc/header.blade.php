
@auth
    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin: 0">
        <strong>Hoş geldin!</strong> {{auth()->user()->name}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endauth
<div class="header">
    <div class="head_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                    <div class="top-box">
                        <ul class="sociel_link">
                            <li> <a href="http://www.bombabomba.com/"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="http://www.bombabomba.com/"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="http://www.bombabomba.com/"><i class="fa fa-instagram"></i></a></li>
                            <li> <a href="http://www.bombabomba.com/"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="top-box">
                        <p>long established fact that a reader will be </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                    <div class="center-desk">
                        <div class="logo"> <a href="{{route('homepage')}}"><img src="images/logo.jpg" alt="logo"/></a> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                <div class="menu-area">
                    <div class="limit-box">
                        <nav class="main-menu">
                            <ul class="menu-area-main">
                                <li class="active"> <a href="{{route('homepage')}}">ANA SAYFA</a> </li>
                                <li> <a href="{{route('about')}}">Hakkımızda</a> </li>
                                <li> <a href="{{route('product')}}">Ürünler</a> </li>
                                <li> <a href="{{route('blog')}}">Blog</a> </li>
                                <li> <a href="{{route('contact')}}">İletişim</a> </li>

                                @auth
                                  @csrf

                                    <li class="mean-last"> <a href="{{route('logout')}}">Cıkıs Yap</a> </li>

                                @endauth
                                @guest()
                                <li class="mean-last"> <a href="{{route('register')}}">Kayıt Ol</a> </li>
                                <li class="mean-last"> <a href="{{route('login')}}">Giris Yap</a> </li>
                                @endguest

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>


        </div>
    </div>
