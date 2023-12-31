@extends("layouts.{$layout}")

@section('vertical-wrapper')
    <div class="vertical-wrapper">
        <ul class="vertical-group">
            <li class="vertical-item level1 mega-parent"><a href="#">New Arrivals</a></li>
            <li class="vertical-item level1 mega-parent"><a href="#">Top 100 Best Seller <span class="h-ribbon e-red mg-l10">Hot</span></a></li>
            <li class="vertical-item level1 vertical-drop"><a href="#">TV & Video</a>
                <div class="menu-level-1 dropdown-menu vertical-menu v2 tvbg pd2 style1">
                    <ul class="level1">
                        <li class="level2 col-md-5">
                            <a href="#">TVs by Type</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">4K Ultra HD</a></li>
                                <li class="level3"><a href="#" title="">Smart TVs</a></li>
                                <li class="level3"><a href="#" title="">LED & LCD TVs & amplifiers</a></li>
                                <li class="level3"><a href="#" title="">OLED TVs</a></li>
                                <li class="level3"><a href="#" title="">QLED/Quantum Dot TVs  </a></li>
                            </ul>
                            <a href="#">Blu-ray & DVD Players</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">4K Blu-ray Players</a></li>
                                <li class="level3"><a href="#" title="">Streaming Blu-ray Players</a></li>
                                <li class="level3"><a href="#" title="">3D Blu-ray Players</a></li>
                                <li class="level3"><a href="#" title="">Portable Blu-ray Players</a></li>
                                <li class="level3"><a href="#" title="">DVD Recorders</a></li>
                            </ul>
                        </li>
                        <li class="level2 col-md-7">
                            <a href="# ">Home Audio</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">Home Theater Systems</a></li>
                                <li class="level3"><a href="#" title="">Soundbars</a></li>
                                <li class="level3"><a href="#" title="">Speakers</a></li>
                                <li class="level3"><a href="#" title="">Receivers & Amplifiers</a></li>
                                <li class="level3"><a href="#" title="">Premium Audio</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="vertical-item level1 vertical-drop"><a href="#">Home Audio & Theater</a>
                <div class="menu-level-1 dropdown-menu vertical-menu v2 homebg pd2 style1">
                    <ul class="level1">
                        <li class="level2 col-md-4">
                            <a href="#">Home theater</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">Sound bars</a></li>
                                <li class="level3"><a href="#" title="">Speakers</a></li>
                                <li class="level3"><a href="#" title="">Receivers & amplifiers</a></li>
                                <li class="level3"><a href="#" title="">Equalizers</a></li>
                                <li class="level3"><a href="#" title="">Phono preamps  </a></li>
                            </ul>
                        </li>
                        <li class="level2 col-md-4">
                            <a href="# ">Speakers</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">Bluetooth speakers</a></li>
                                <li class="level3"><a href="#" title="">Ceiling & in-wall speakers</a></li>
                                <li class="level3"><a href="#" title="">Digital music systems</a></li>
                                <li class="level3"><a href="#" title="">Outdoor</a></li>
                                <li class="level3"><a href="#" title="">Satellite speakers</a></li>
                            </ul>
                        </li>
                        <li class="level2 col-md-4">
                            <a href="#">Accessories</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">Receivers & amplifiers</a></li>
                                <li class="level3"><a href="#" title="">Cd & tape players</a></li>
                                <li class="level3"><a href="#" title="">Tuners</a></li>
                                <li class="level3"><a href="#" title="">Curntables</a></li>
                                <li class="level3"><a href="#" title="">Receivers & adapters</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="vertical-item level1 vertical-drop"><a href="#">Camera, Photo & Video</a>
                <div class="menu-level-1 dropdown-menu vertical-menu">
                    <ul class="vertical-menu1">
                        <li><a href="#">Car Audio</a></li>
                        <li><a href="#">Radar Detectors</a></li>
                        <li><a href="#">Car Safety & Security</a></li>
                        <li><a href="#">Car Video</a></li>
                        <li><a href="#">Two-Way Radios</a></li>
                        <li><a href="#">CB Radios & Scanners</a></li>
                        <li><a href="#">In-Dash Mounting Kits</a></li>
                        <li><a href="#">Installation Accessories.</a></li>
                    </ul>
                </div>
            </li>
            <li class="vertical-item level1 vertical-drop"><a href="#">Cell Phones & Accessories</a>
                <div class="menu-level-1 dropdown-menu vertical-menu v2 phonebg pd2 style1">
                    <ul class="level1">
                        <li class="level2 col-md-4">
                            <a href="#">Cell Phones</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">Samsung Galaxy S8</a></li>
                                <li class="level3"><a href="#" title="">iPhone 7/7 Plus</a></li>
                                <li class="level3"><a href="#" title="">iPhone 6</a></li>
                                <li class="level3"><a href="#" title="">Samsung Galaxy S7</a></li>
                                <li class="level3"><a href="#" title="">Unlocked Phones</a></li>
                            </ul>
                            <a href="#">Cases</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">4Armbands</a></li>
                                <li class="level3"><a href="#" title="">Armbands</a></li>
                                <li class="level3"><a href="#" title="">Cases</a></li>
                                <li class="level3"><a href="#" title="">Flip Cases</a></li>
                                <li class="level3"><a href="#" title="">Holsters & Clips</a></li>
                            </ul>
                        </li>
                        <li class="level2 col-md-8">
                            <a href="# ">Accessories</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">Batteries</a></li>
                                <li class="level3"><a href="#" title="">Bluetooth Headsets</a></li>
                                <li class="level3"><a href="#" title="">Bluetooth Speakers</a></li>
                                <li class="level3"><a href="#" title="">Car Accessories</a></li>
                                <li class="level3"><a href="#" title="">Chargers</a></li>
                            </ul>
                            <a href="# ">Connected Devices</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">Tablets</a></li>
                                <li class="level3"><a href="#" title="">Mobile Hotspots</a></li>
                                <li class="level3"><a href="#" title="">Smart Watches</a></li>
                                <li class="level3"><a href="#" title="">Wearable Technology</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="vertical-item level1 vertical-drop"><a href="#">Headphones</a>
                <div class="menu-level-1 dropdown-menu vertical-menu v2 headphonebg pd3 style1">
                    <ul class="level1">
                        <li class="level2 col-md-6">
                            <a href="#">Headphones</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">In-Ear & Earbud</a></li>
                                <li class="level3"><a href="#" title="">On-Ear</a></li>
                                <li class="level3"><a href="#" title="">Over-Ear</a></li>
                                <li class="level3"><a href="#" title="">Wireless</a></li>
                                <li class="level3"><a href="#" title="">Sports & Fitness</a></li>
                            </ul>
                        </li>
                        <li class="level2 col-md-6">
                            <a href="# ">Speaker System</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">Complete Systems</a></li>
                                <li class="level3"><a href="#" title="">Sound Bars</a></li>
                                <li class="level3"><a href="#" title="">Surround Sound</a></li>
                                <li class="level3"><a href="#" title="">Receivers & Amplifiers</a></li>
                                <li class="level3"><a href="#" title="">Equalizers</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="vertical-item level1 vertical-drop"><a href="#">Car Electronics</a>
                <div class="menu-level-1 dropdown-menu vertical-menu">
                    <ul class="vertical-menu1">
                        <li><a href="#">Car Audio</a></li>
                        <li><a href="#">Radar Detectors</a></li>
                        <li><a href="#">Car Safety & Security</a></li>
                        <li><a href="#">Car Video</a></li>
                        <li><a href="#">Two-Way Radios</a></li>
                        <li><a href="#">CB Radios & Scanners</a></li>
                        <li><a href="#">In-Dash Mounting Kits</a></li>
                        <li><a href="#">Installation Accessories.</a></li>
                    </ul>
                </div>
            </li>
            <li class="vertical-item level1 vertical-drop"><a href="#">Electronics Showcase</a>
                <div class="menu-level-1 dropdown-menu vertical-menu">
                    <ul class="vertical-menu1">
                        <li><a href="#">Car Audio</a></li>
                        <li><a href="#">Radar Detectors</a></li>
                        <li><a href="#">Car Safety & Security</a></li>
                        <li><a href="#">Car Video</a></li>
                        <li><a href="#">Two-Way Radios</a></li>
                        <li><a href="#">CB Radios & Scanners</a></li>
                        <li><a href="#">In-Dash Mounting Kits</a></li>
                        <li><a href="#">Installation Accessories.</a></li>
                    </ul>
                </div>
            </li>
            <li class="vertical-item level1 vertical-drop mega-parent"><a href="#">All categlories</a>
                <div class="menu-level-1 dropdown-menu vertical-menu v2 pd">
                    <div class="row">
                        <div class="col-md-4 text-center cate-item">
                            <a href="#"><img src="../resources/img/megamenu/cate1.jpg" alt="" class="img-reponsive"></a>
                            <h3><a href="#">Mirrorless Cameras</a></h3>
                        </div>
                        <div class="col-md-4 text-center cate-item">
                            <a href="#"><img src="../resources/img/megamenu/cate2.jpg" alt="" class="img-reponsive"></a>
                            <h3><a href="#">Lenses</a></h3>
                        </div>
                        <div class="col-md-4 text-center cate-item">
                            <a href="#"><img src="../resources/img/megamenu/cate3.jpg" alt="" class="img-reponsive"></a>
                            <h3><a href="#">Photography Drones</a></h3>
                        </div>
                        <div class="col-md-4 text-center cate-item">
                            <a href="#"><img src="../resources/img/megamenu/cate4.jpg" alt="" class="img-reponsive"></a>
                            <h3><a href="#">Sports & Action Cameras</a></h3>
                        </div>
                        <div class="col-md-4 text-center cate-item">
                            <a href="#"><img src="../resources/img/megamenu/cate5.jpg" alt="" class="img-reponsive"></a>
                            <h3><a href="#">Optics</a></h3>
                        </div>
                        <div class="col-md-4 text-center cate-item">
                            <a href="#"><img src="../resources/img/megamenu/cate6.jpg" alt="" class="img-reponsive"></a>
                            <h3><a href="#">Accessories</a></h3>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endsection