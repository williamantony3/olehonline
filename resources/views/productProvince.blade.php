@extends('base')
@section('content')
<div class="ps-products-wrap pt-80 pb-80">

    @if($products->count()==0)
    <center>Tidak ada produk</center>
    @else
    <div class="ps-products" data-mh="product-listing">
          <div class="ps-product__columns">
            @foreach($products as $product)
            <div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail"><img src="/assets/images/product/{{$product->ProductImage}}" alt=""><a class="ps-shoe__overlay" href="/product/detail/{{$product->ProductId}}"></a>
                </div>
                <div class="ps-shoe__content">
                  <div class="ps-shoe__variants">
                  <center><a href="/product/detail/{{$product->ProductId}}"><button class="ps-btn" style="font-size:14px; width:70%;">Lihat<i class="ps-icon-next"></i></button></a></center>
                  </div>
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="/product/detail/{{$product->ProductId}}">{{$product->ProductName}}</a>
                    <p class="ps-shoe__categories"><a href="/product/from/{{$product->ProvinceId}}">{{$product->province->Name}}</a></p><span class="ps-shoe__price"> Rp {{$product->ProductPrice}}</span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    @endif
        
      </div>
@endsection