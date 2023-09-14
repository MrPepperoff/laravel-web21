@extends("layouts.{$layout}")
<!-- <form action="/update-post" method="POST">
@foreach($data as $post)
    <p>{{ $post->text }}</p>
    
    <input type="text" name='update'>
    <button>Обновить</button>
    <a href="/delete-post/{{ $post->id }}">удалил</a> 
   
@endforeach
</form> -->
@section('content')
        <div class="ads-group v3">
            <div class="container container-240">
                <div class="row">
                <div class="col-lg-3 col-md-3 set-w"></div>
                    <div class="col-lg-9 col-md-9 set-w2">
                        <p>Welcome</p>
                            <form action="/loadfile" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="myfile">
                                <button>Войти</button>
                            </form>
                        @if($user)
                            <a href="/logout">Выход</a>
                        @else
                        <form action="/authorisation" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="email">
                            <input type="password" name="password" placeholder="password">
                            <button>Войти</button>
                        </form> 
                        @endif       
                    </div>
                </div>
                
            </div>
            <div class="container container-240">
                <div class="row">
                    <div class="col-lg-3 col-md-3 set-w"></div>
                    <div class="col-lg-9 col-md-9 set-w2">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="slide">
                                    <div class="e-slide v2 js-slider-3items">
                                        <div class="e-slide-img v2">
                                            <a href="#"><img src="{{ asset('resources/img/slider/h1_s1.jpg') }}" alt=""></a>
                                            <div class="box-center slide-content v3">
                                                <p class="cate v2 white text-center">Power to the pro</p>
                                                <h3 class="white v3 text-center">The vision is brighter than ever.</h3>
                                                <a href="#" class="slide-btn e-red-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                            </div>
                                        </div>
                                        <div class="e-slide-img v2">
                                            <a href="#"><img src="{{ asset('resources/img/slider/h1_s2.jpg') }}" alt=""></a>
                                            <div class="box-center slide-content v3">
                                                <p class="cate v2 white text-center">Power to the pro</p>
                                                <h3 class="white v3 text-center">The vision is brighter than ever.</h3>
                                                <a href="#" class="slide-btn e-red-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                            </div>
                                        </div>
                                        <div class="e-slide-img v2">
                                            <a href="#"><img src="{{ asset('resources/img/slider/h1_s3.jpg') }}" alt=""></a>
                                            <div class="box-center slide-content v3">
                                                <p class="cate v2 white text-center">Power to the pro</p>
                                                <h3 class="white v3 text-center">The vision is brighter than ever.</h3>
                                                <a href="#" class="slide-btn e-red-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="ads">
                                    <div class="banner-img banner-img2">
                                        <a href="#"><img src="{{ asset('resources/img/banner/h1_b1.jpg') }}" alt="" class="img-responsive"></a>
                                        <div class="h-banner-content v3">
                                            <p class="content-name">Mini Quick Chagre 3.0</p>
                                            <p class="content-price percent">Sale up to <span class="red">40</span></p>
                                            <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="homepage-banner">
            <div class="container container-240">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="banner-img banner-img2">
                            <a href="#"><img src="{{ asset('resources/img/banner/h1_b2.jpg') }}" alt="" class="img-responsive"></a>
                            <div class="h-banner-content">
                                <p class="content-name">The pro stage for your home</p>
                                <p class="content-price">From <span class="red">69.99</span></p>
                                <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="banner-img banner-img2">
                            <a href="#"><img src="{{ asset('resources/img/banner/h1_b3.jpg') }}" alt="" class="img-responsive"></a>
                            <div class="h-banner-content">
                                <p class="content-name">Smart speaker for music lovers</p>
                                <p class="content-price">From <span class="red">39.99</span></p>
                                <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flash-deals">
            <div class="container container-240">
                <div class="title-icon t-column">
                    <div class="t-inside">
                        <img src="{{ asset('resources/img/flash-deals.png') }}" alt="">
                    </div>
                    <h1>Flash Deals</h1>
                </div>
                <div class="owl-carousel owl-theme owl-cate js-owl-cate2">
                    <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head product-img">
                                <a href="#"><img src="{{ asset('resources/img/product/headphone5.jpg') }}" alt=""></a>
                                <div class="ribbon-price v3 red"><span>- 30% </span></div>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center">Head phones</p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$79.00</span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#">Esonstyle Rose Golden Bluetooth Headphone</a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head">
                                <a href="#"><img src="{{ asset('resources/img/product/security.jpg') }}" alt=""></a>
                                <div class="ribbon-price v3 red"><span>- 30% </span></div>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center">Security Sensors</p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$79.00</span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#">Esonstyle Rose Golden Bluetooth Headphone</a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head">
                                <a href="#"><img src="{{ asset('resources/img/product/iphonex.jpg') }}" alt=""></a>
                                <div class="ribbon-price v3 red"><span>- 30% </span></div>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center">Smartphones</p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$79.00</span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#">Esonstyle Rose Golden Bluetooth Headphone</a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head">
                                <a href="#"><img src="{{ asset('resources/img/product/headphone2.jpg') }}" alt=""></a>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center">Head phones</p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$79.00</span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#">Esonstyle Rose Golden Bluetooth Headphone</a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head">
                                <a href="#"><img src="{{ asset('resources/img/product/sonos.jpg') }}" alt=""></a>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center">Head phones</p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$79.00</span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#">Esonstyle Rose Golden Bluetooth Headphone</a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head">
                                <a href="#"><img src="{{ asset('resources/img/product/headphone4.jpg') }}" alt=""></a>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center">Head phones</p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$79.00</span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#">Esonstyle Rose Golden Bluetooth Headphone</a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head">
                                <a href="#"><img src="{{ asset('resources/img/product/fujifilm.jpg') }}" alt=""></a>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center">Head phones</p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$79.00</span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#">Esonstyle Rose Golden Bluetooth Headphone</a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tab bg-gradient bg-insinde">
            <div class="container container-240">
                <ul class="product-tab-sw">
                    <li class="active"><a data-toggle="tab" href="#feature">Featured</a></li>
                    <li class=""><a data-toggle="tab" href="#top-rated">Top rated</a></li>
                    <li class=""><a data-toggle="tab" href="#most">Most gifted</a></li>
                </ul>
                <div class="tab-content">
                    <div id="feature" class="tab-pane fade in active">
                        <div class="product-tab-pd js-multiple-row2">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/samsung3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/samsung3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/samsung3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="top-rated" class="tab-pane fade">
                        <div class="product-tab-pd js-multiple-row2">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/samsung3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/samsung3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="most" class="tab-pane fade">
                        <div class="product-tab-pd js-multiple-row2">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/samsung3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/samsung3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bestseller2">
            <div class="container container-240">
                <div class="h-heading">
                    <div class="title-icon t-inline">
                        <img src="{{ asset('resources/img/iconbs.png') }}" alt="">
                        <h1>Best Sellers</h1>
                    </div>
                    <ul class="product-tab-sw2">
                        <li class="active"><a data-toggle="tab" href="#tv" aria-expanded="true">TV & Video</a></li>
                        <li class=""><a data-toggle="tab" href="#audito" aria-expanded="false">Audio & Theater</a></li>
                        <li class=""><a data-toggle="tab" href="#camera" aria-expanded="false">Camera, Photo & Video</a></li>
                        <li class=""><a data-toggle="tab" href="#phone" aria-expanded="false">Cell Phones & Accessories</a></li>
                        <li class=""><a data-toggle="tab" href="#headphone" aria-expanded="false">Headphones</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="tv" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                                <div class="pd-bd product-inner v3">
                                    <div class="product-img v2">
                                        <a href="#"><img src="{{ asset('resources/img/b-product1.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/xbox.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/fujifilm.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/ring.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="audito" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                                <div class="pd-bd product-inner v3">
                                    <div class="product-img v2">
                                        <a href="#"><img src="{{ asset('resources/img/b-product2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/xbox.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/fujifilm.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/ring.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="camera" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                                <div class="pd-bd product-inner v3">
                                    <div class="product-img v2">
                                        <a href="#"><img src="{{ asset('resources/img/b-product3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/xbox.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/fujifilm.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/ring.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="phone" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                                <div class="pd-bd product-inner v3">
                                    <div class="product-img v2">
                                        <a href="#"><img src="{{ asset('resources/img/b-product4.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/xbox.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/fujifilm.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/ring.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="headphone" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                                <div class="pd-bd product-inner v3">
                                    <div class="product-img v2">
                                        <a href="#"><img src="{{ asset('resources/img/b-product1.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/xbox.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/fujifilm.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/ring.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="homepage-banner">
            <div class="container container-240">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="banner-img banner-img2">
                            <a href="#"><img src="{{ asset('resources/img/banner/h1_b4.jpg') }}" alt="" class="img-responsive"></a>
                            <div class="h-banner-content v2">
                                <p class="content-name">Home at the good</p>
                                <p class="content-price">From <span class="red">69.99</span></p>
                                <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="banner-img banner-img2">
                            <a href="#"><img src="{{ asset('resources/img/banner/h1_b5.jpg') }}" alt="" class="img-responsive"></a>
                            <div class="h-banner-content v2">
                                <p class="content-name">Snap Digital Camera</p>
                                <p class="content-price">From <span class="red">19.99</span></p>
                                <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="banner-img banner-img2">
                            <a href="#"><img src="{{ asset('resources/img/banner/h1_b6.jpg') }}" alt="" class="img-responsive"></a>
                            <div class="h-banner-content v2">
                                <p class="content-name">Minimal Gold Wall Clock</p>
                                <p class="content-price">From <span class="red">39.99</span></p>
                                <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="releases spc1 bg-gradient bg-insinde">
            <div class="container container-240">
                <div class="title-icon t-column mg-50">
                    <div class="t-inside">
                        <img src="{{ asset('resources/img/real.png') }}" alt="">
                    </div>
                    <h1>New releases</h1>
                </div>
                <ul class="product-tab-sw2">
                    <li class="active"><a data-toggle="tab" href="#tv2" aria-expanded="true">TV & Video</a></li>
                    <li class=""><a data-toggle="tab" href="#audito2" aria-expanded="false">Audio & Theater</a></li>
                    <li class=""><a data-toggle="tab" href="#camera2" aria-expanded="false">Camera, Photo & Video</a></li>
                    <li class=""><a data-toggle="tab" href="#phone2" aria-expanded="false">Cell Phones & Accessories</a></li>
                    <li class=""><a data-toggle="tab" href="#headphone2" aria-expanded="false">Headphones</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tv2" class="tab-pane fade in active">
                        <div class="owl-carousel owl-theme owl-cate v3 js-owl-cate">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/tv2.jpg') }}" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/headphone3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/samsungbox.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/smartwatch.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="audito2" class="tab-pane fade">
                        <div class="owl-carousel owl-theme owl-cate v3 js-owl-cate">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/tv.jpg') }}" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/headphone3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/samsungbox.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/smartwatch.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="camera2" class="tab-pane fade">
                        <div class="owl-carousel owl-theme owl-cate v3 js-owl-cate">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/fujifilm.jpg') }}" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/headphone3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/samsungbox.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/smartwatch.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="phone2" class="tab-pane fade">
                        <div class="owl-carousel owl-theme owl-cate v3 js-owl-cate">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/samsung.jpg') }}" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/headphone3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/samsungbox.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/smartwatch.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="headphone2" class="tab-pane fade">
                        <div class="owl-carousel owl-theme owl-cate v3 js-owl-cate">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/headphone.jpg') }}" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/headphone3.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/samsungbox.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/smartwatch.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="{{ asset('resources/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-240">
            <div class="brand">
                <div class="ecome-heading style5v3 spc4">
                    <div class="title-icon t-inline t-line">
                        <img src="{{ asset('resources/img/iconbrand.png') }}" alt="">
                        <h1>Shop by brand</h1>
                    </div>
                    <a href="#" class="btn-show">Shop more<i class="ion-ios-arrow-forward"></i></a>
                </div>
                
                <div class="owl-carousel owl-theme owl-brand js-owl-brand">
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="{{ asset('resources/img/brand/brand.png') }}" alt=""></a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="{{ asset('resources/img/brand/brand_2.png') }}" alt=""></a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="{{ asset('resources/img/brand/brand_3.png') }}" alt=""></a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="{{ asset('resources/img/brand/brand_4.png') }}" alt=""></a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="{{ asset('resources/img/brand/brand_5.png') }}" alt=""></a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="{{ asset('resources/img/brand/brand_7.png') }}" alt=""></a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="{{ asset('resources/img/brand/brand_8.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="about-brand">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-sm-3 col-md-4">
                            <div class="about-brand-info text-center">
                                <div class="brand-img">
                                    <a href="#" class="hover-images"><img src="{{ asset('resources/img/brand/sony_info.png') }}" alt=""></a>
                                </div>
                                <div class="brand-info">
                                    <p>All the Lorem Ipsum generators on the Internet
                                        <br> tend to repeat predefined chunks as necessary, making this the first true generator on the Internetandful
                                        <br> of model sentence </p>
                                </div>
                                <a href="#" class="btn-gradient btn-brand">Shop this brand <i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-sm-8 col-md-8">
                            <div class="row engoc-equal-row">
                                <div class="col-xs-6 col-sm-6 col-md-6 product-item">
                                    <div class="pd-bd product-inner v2">
                                        <div class="flex align-center">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/tplink.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                    <div class="product-bottom v2">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <div class="product-bottom-element flex">
                                                            <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                            <div class="color-group">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button-group hidden-xs hidden-sm">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-button-group hidden-md hidden-lg">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 product-item">
                                    <div class="pd-bd product-inner v2">
                                        <div class="flex align-center">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/wifi.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                    <div class="product-bottom v2">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <div class="product-bottom-element flex">
                                                            <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                            <div class="color-group">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button-group hidden-xs hidden-sm">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-button-group hidden-md hidden-lg">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 product-item">
                                    <div class="pd-bd product-inner v2">
                                        <div class="flex align-center">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/phone5.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                    <div class="product-bottom v2">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <div class="product-bottom-element flex">
                                                            <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                            <div class="color-group">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button-group hidden-xs hidden-sm">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-button-group hidden-md hidden-lg">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 product-item">
                                    <div class="pd-bd product-inner v2">
                                        <div class="flex align-center">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('resources/img/product/logitech.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                    <div class="product-bottom v2">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <div class="product-bottom-element flex">
                                                            <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                            <div class="color-group">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button-group hidden-xs hidden-sm">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-button-group hidden-md hidden-lg">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="e-category">
            <div class="container container-240">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h1 class="cate-title">Featured Products</h1>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('resources/img/product/usb.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('resources/img/product/macbook.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('resources/img/product/flycam.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h1 class="cate-title">Top Rated Products</h1>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('resources/img/product/samsung.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('resources/img/product/headphone2.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('resources/img/product/anker.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h1 class="cate-title">Top Selling Products</h1>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('resources/img/product/headphone.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('resources/img/product/samsung2.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('resources/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-240">
            <div class="banner-callus spc1 image-bd effect_img2">
                <a href="#"><img src="{{ asset('resources/img/banner/h1_b7.jpg') }}" alt="" class="img-responsive"></a>
                <div class="box-center v2">
                    <p>Free Shipping on Orders $50</p>
                    <a href="#" class="btn-callus">Shop now</a>
                </div>
            </div>
        </div>
        <div class="more-product bg-gradient bg-insinde">
            <div class="container container-240">
                <div class="h-heading">
                    <div class="title-icon t-inline">
                        <img src="{{ asset('resources/img/iconbs.png') }}" alt="">
                        <h1>You may like</h1>
                    </div>
                    <a href="#" class="btn-morepd">
                        <span><i class="icon-refresh"></i></span>Refresh for more
                    </a>
                </div>
                <div class="multiple-row js-multiple-row">
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/ipad.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                    <a href="#" class="circle darkyellow"></a>
                                                    <a href="#" class="circle skyblue"></a>
                                                    <a href="#" class="circle pink"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/tplink.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/wifi.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/macbook.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="ribbon-price v4 red"><span>- 30% </span></div>
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/phone5.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/logitech.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/ipad.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/tplink.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/phone5.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/wifi.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/sonos.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/headphone2.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/headphone.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/tv.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/phone2.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/fujifilm.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('resources/img/product/samsung.jpg') }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature">
            <div class="container container-240">
                <div class="feature-inside">
                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="{{ asset('resources/img/feature/truck.png') }}" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Worldwide Delivery</h3>
                            <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                        </div>
                    </div>
                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="{{ asset('resources/img/feature/credit-card.png') }}" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Safe Payment</h3>
                            <p>Pay with the world’s most popular and secure payment methods.</p>
                        </div>
                    </div>
                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="{{ asset('resources/img/feature/safety.png') }}" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Shop with Confidence</h3>
                            <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                        </div>
                    </div>
                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="{{ asset('resources/img/feature/telephone.png') }}" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>24/7 Help Center</h3>
                            <p>Round-the-clock assistance for a smooth shopping experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection