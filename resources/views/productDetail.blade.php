@extends('base')
@section('content')
<div class="test">
        <div class="container">
          <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                </div>
          </div>
        </div>
      </div>
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
                  <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Overview</a></li>
                </ul>
              </div>
              <div class="tab-content mb-60">
                <div class="tab-pane active" role="tabpanel" id="tab_01">
                  <p>{{$product->Description}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection