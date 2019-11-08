<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="/assets/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="/assets/favicon.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>OlehOnline</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="/assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="/assets/plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="/assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets/plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="/assets/plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/assets/plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="/assets/plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="/assets/plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
          <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>Jl. Sungai Batanghari No. 78, Kab. Bogor, Indonesia  -  Telepon : 0251-804377</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                @if(!Session::get('login'))
                  <div class="header__actions" data-toggle="modal" data-target="#myModal"><a href="#">Masuk & Daftar</a></div>

                @else
                  <div class="header__actions"><a href="{{url('logout')}}">Keluar</a></div>
                  <div class="header__actions"><a href="{{url('editProfile')}}">Ubah Profil</a></div>

                @endif
                    <!-- <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#"><img src="/assets/images/flag/usa.svg" alt=""> USD</a></li>
                        <li><a href="#"><img src="/assets/images/flag/singapore.svg" alt=""> SGD</a></li>
                        <li><a href="#"><img src="/assets/images/flag/japan.svg" alt=""> JPN</a></li>
                      </ul>
                    </div>
                    <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Japanese</a></li>
                        <li><a href="#">Chinese</a></li>
                      </ul>
                    </div> -->
                  </div>
                </div>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="{{url('/')}}"><img src="/assets/images/logo.png" alt=""></a></div>
          </div>
          <div class="navigation__column center">
                <ul class="main-menu menu">
                @foreach($productTypes as $productType)
                  <li class="menu-item menu-item-has-children dropdown"><a href="{{$productType->ProductTypeId}}">{{$productType->ProductTypeName}}</a></li>
                @endforeach
                  <li class="menu-item"><a href="{{url('explore')}}">Jelajah Nusantara</a></li>
                  <li class="menu-item"><a href="{{url('contact')}}">Hubungi Kami</a></li>

                </ul>
          </div>
          <div class="navigation__column right">
            <form class="ps-search--header" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="Cari oleh-oleh...">
              <button><i class="ps-icon-search"></i></button>
            </form>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ps-icon-shopping-cart"></i></a>
              <div class="ps-cart__listing">
                <div class="ps-cart__content">
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="/assets/images/cart-preview/1.jpg" alt=""></div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Amazin’ Glazin’</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="/assets/images/cart-preview/2.jpg" alt=""></div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">The Crusty Croissant</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="/assets/images/cart-preview/3.jpg" alt=""></div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">The Rolling Pin</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                </div>
                <div class="ps-cart__total">
                  <p>Number of items:<span>36</span></p>
                  <p>Item Total:<span>£528.00</span></p>
                </div>
                <div class="ps-cart__footer"><a class="ps-btn" href="cart.html">Check out<i class="ps-icon-arrow-left"></i></a></div>
              </div>
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <!-- <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      </div>
    </div> -->
    <main class="ps-main">
    
    @yield('content')
      
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Daftarkan email anda</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="" id="subscription">
                    <input class="form-control" type="email" placeholder="Email" required="required">
                    <button type="submit">Daftar</button>
                  </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <p>untuk mendapatkan promo menarik!</p>
                </div>
          </div>
        </div>
      </div>
      <div class="ps-footer bg--cover" data-background="/assets/images/background/parallax.png">
        <div class="ps-footer__content">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info">
                      <header>
                      
                        <h3 class="ps-widget__title">Hubungi Kami</h3>
                      </header>
                      <footer>
                        <p><strong>Jl. Sungai Batanghari No. 78, Kab. Bogor, Indonesia</strong></p>
                        <p>Email: <a href='mailto:support@olehonline.com'>support@olehonline.com</a></p>
                        <p>Phone: 0251-804377</p>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info">
                      <header>
                        <h3 class="ps-widget__title">Ikuti Kami</h3>
                      </header>
                      <footer>
                        <p><strong>Media Sosial OlehOnline</strong></p>
                        
                        <p><a href="#"><i class="fa fa-instagram"></i> : @olehonline</a></p>
                        <p><a href="#"><i class="fa fa-facebook"></i> : OlehOnline</a></p>
                        <p><a href="#"><i class="fa fa-twitter"></i> : @olehonline</a></p>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info">
                      <header>
                        <h3 class="ps-widget__title">Pembayaran</h3>
                      </header>
                      <footer>
                        <p><strong>atas nama OlehOnline</strong></p>
                        
                        <p>BCA : 0987877890</p>
                        <p>BRI : 0876677261</p>
                        <p>OCBC : 9887766776</p>
                      </footer>
                    </aside>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info">
                      <header>
                        <h3 class="ps-widget__title">Pengiriman</h3>
                      </header>
                      <footer>
                        <p><strong>OlehOnline Express</strong></p>
                        
                        <p>OlehOnline Express adalah ekspedisi milik OlehOnline untuk mengirimkan barang ke seluruh Indonesia</p>
                      </footer>
                    </aside>
                  </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <aside class="ps-widget--footer ps-widget--info">
                        <header>
                          <h3 class="ps-widget__title" style="text-align:center;">Tentang Kami</h3>
                        </header>
                        <footer>
                          <center>
                          <p>OlehOnline merupakan situs penjualan oleh-oleh dari seluruh Indonesia. Ayo bergabung ke OlehOnline, dan jual produkmu disini. OlehOnline menjamin transaksi jual beli anda. Terima pesanan kamu atau dapatkan uang kamu kembali dengan Garansi OlehOnline. Ayo gabung dalam komunitas OlehOnline dan mulai belanja sekarang!</p>
                          </center>
                        </footer>
                </aside>
              </div>
            </div>
          </div>
        </div>
        <div class="ps-footer__copyright">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <p>&copy; <a href="#">SKYTHEMES</a>, Inc. All rights Resevered. Design by <a href="#"> Alena Studio</a></p>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <div style="float:left;"><h4 class="modal-title">Masuk</h4></div>
            <div style="float:right;"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
            <div style="clear:both;"></div>
          </div>
          <div class="modal-body">
            <form action="{{url('/loginPost')}}" method="post">
            {{csrf_field()}}
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <center>
              <button class="ps-btn" type="submit">Masuk<i class="ps-icon-next"></i></button>
              <br><br>
              <p>Belum punya akun OlehOnline? <a href="{{url('register')}}" style="text-decoration:underline;">Daftar</a></p>
              </center>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="subscribe" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <div style="float:left;"><h4 class="modal-title">Sukses</h4></div>
            <div style="float:right;"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
            <div style="clear:both;"></div>
          </div>
          <div class="modal-body">
            <p>Daftar email sukses!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- JS Library-->
    <script type="text/javascript" src="/assets/plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="/assets/plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="/assets/plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/elevatezoom/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="/assets/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script><script type="text/javascript" src="/assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="/assets/js/main.js"></script>
    @if(Session::has('alert'))
      <script>
      $(document).ready(function() {
            $('#myModal').modal('show');
      });
      </script>
    @endif
    <script>
      $(document).ready(function() {
        $('#subscription').on('submit', function(e){
            $('#subscribe').modal('show');
            e.preventDefault();
        });
      });
    </script>
  </body>
</html>