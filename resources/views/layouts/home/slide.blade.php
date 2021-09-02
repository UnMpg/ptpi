<!-- ======= Slider Section ======= -->
<div id="home" class="slider-area">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            <img src="{{ asset('assets/home/slider/munas.jpg') }}" alt="" title="#slider-direction-1" />
        </div>

        <!-- direction 1 -->
        <div id="slider-direction-1" class="slider-direction slider-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated"
                                data-wow-duration="2s" data-wow-delay=".2s">
                                <h2 class="title1">Indonesian Association of Hospital Engineering </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s"
                                data-wow-delay=".2s">
                                <h1 class="title2">Perkumpulan Teknik Perumahsakitan Indonesia</h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated"
                                data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="#services">Mulai</a>
                                <a class="ready-btn page-scroll" href="{{action('AuthController@getRegister')}}">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Slider -->
