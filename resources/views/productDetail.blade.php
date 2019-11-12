@extends('base')
@section('content')
<div class="ps-product--detail pt-60">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-10 col-md-12 col-lg-offset-1">
              <div class="ps-product__thumbnail">
                <div class="ps-product__image">
                  <div class="item"><img class="zoom" src="/assets/images/product/{{$product->ProductImage}}" alt="" data-zoom-image="/assets/images/product/{{$product->ProductImage}}"></div>
                </div>
              </div>
              <div class="ps-product__thumbnail--mobile">
                <div class="ps-product__main-img"><img src="/assets/images/product/{{$product->ProductImage}}" alt=""></div>
              </div>
              <div class="ps-product__info">
                <h1>{{$product->ProductName}}</h1>
                <p class="ps-product__category"><a href="/product/from/{{$product->ProvinceId}}">{{$product->province->Name}}</a></p>
                <h3 class="ps-product__price">Rp {{$product->ProductPrice}}</h3><br>
                <div class="ps-product__block ps-product__size">
                  <h4>Kuantitas</h4>
                  <form action="/cart/add/{{$product->ProductId}}" method="post">
                  {{csrf_field()}}
                  <div class="form-group">
                    <input class="form-control" type="number" value="1" name="kuantitas"> tersisa {{$product->ProductStock}} buah
                  </div>
                </div>
                @if(Session::get('login'))
                <div class="ps-product__shopping"><button type="submit" class="ps-btn mb-10">Masukkan Keranjang <i class="ps-icon-next"></i></button>
                </div>
              </form>
                @else
                <a class="ps-btn mb-10" href="" data-toggle="modal" data-target="#myModal">Masuk <i class="ps-icon-next"></i></a>
                @endif
              </div>
              <div class="clearfix"></div>
              <div class="ps-product__content mt-50">
                <ul class="tab-list" role="tablist">
                  <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Deskripsi</a></li>
                </ul>
              </div>
              <div class="tab-content mb-60">
                <div class="tab-pane active" role="tabpanel" id="tab_01">
                  <p>{{$product->Description}}</p>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab_02">
                  <p class="mb-20">1 review for <strong>Shoes Air Jordan</strong></p>
                  <div class="ps-review">
                    <div class="ps-review__thumbnail"><img src="images/user/1.jpg" alt=""></div>
                    <div class="ps-review__content">
                      <header>
                        <select class="ps-rating">
                          <option value="1">1</option>
                          <option value="1">2</option>
                          <option value="1">3</option>
                          <option value="1">4</option>
                          <option value="5">5</option>
                        </select>
                        <p>By<a href=""> Alena Studio</a> - November 25, 2017</p>
                      </header>
                      <p>Soufflé danish gummi bears tart. Pie wafer icing. Gummies jelly beans powder. Chocolate bar pudding macaroon candy canes chocolate apple pie chocolate cake. Sweet caramels sesame snaps halvah bear claw wafer. Sweet roll soufflé muffin topping muffin brownie. Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie.</p>
                    </div>
                  </div>
                  <form class="ps-product__review" action="_action" method="post">
                    <h4>ADD YOUR REVIEW</h4>
                    <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <label>Name:<span>*</span></label>
                              <input class="form-control" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                              <label>Email:<span>*</span></label>
                              <input class="form-control" type="email" placeholder="">
                            </div>
                            <div class="form-group">
                              <label>Your rating<span></span></label>
                              <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">5</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <label>Your Review:</label>
                              <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                              <button class="ps-btn ps-btn--sm">Submit<i class="ps-icon-next"></i></button>
                            </div>
                          </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab_03">
                  <p>Add your tag <span> *</span></p>
                  <form class="ps-product__tags" action="_action" method="post">
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="">
                      <button class="ps-btn ps-btn--sm">Add Tags</button>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab_04">
                  <div class="form-group">
                    <textarea class="form-control" rows="6" placeholder="Enter your addition here..."></textarea>
                  </div>
                  <div class="form-group">
                    <button class="ps-btn" type="button">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-section ps-section--top-sales ps-owl-root pt-40 pb-80">
        <div class="ps-container">
          <div class="ps-section__header mb-50">
            <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                    <h3 class="ps-section__title" data-mask="Terkait">- Produk Terkait</h3>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i></a><a class="ps-next" href="#"><i class="ps-icon-arrow-left"></i></a></div>
                  </div>
            </div>
          </div>
          <div class="ps-section__content">
            <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
            @foreach($related as $relate)
              <div class="ps-shoes--carousel">
                <div class="ps-shoe">
                  <div class="ps-shoe__thumbnail"><img src="/assets/images/product/{{$relate->ProductImage}}" alt=""><a class="ps-shoe__overlay" href="/product/detail/{{$relate->ProductId}}"></a>
                  </div>
                  <div class="ps-shoe__content">
                    <div class="ps-shoe__variants">
                      <center><a href="/product/detail/{{$relate->ProductId}}"><button class="ps-btn" style="font-size:14px; width:70%;">Lihat<i class="ps-icon-next"></i></button></a></center>
                    </div>
                    <div class="ps-shoe__detail">
                      <a class="ps-shoe__name" href="/product/detail/{{$relate->ProductId}}">{{$relate->ProductName}}</a>
                      <p class="ps-shoe__categories"><a href="/product/from/{{$relate->ProvinceId}}">{{$relate->province->Name}}</a></p><span class="ps-shoe__price">
                        Rp {{$relate->ProductPrice}}</span>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
              
            </div>
          </div>
        </div>
      </div>
@endsection