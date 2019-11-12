@extends('base')
@section('content')
<div class="ps-content pt-80 pb-80">
        <div class="ps-container">
            <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                    <h3 class="ps-section__title" data-mask="Indonesia">- {{$provinces->Name}}</h3>
                    <p>{{$provinces->Description}}</p>
                  </div>
            </div>
        </div>
</div>
<div class="ps-section ps-section--top-sales ps-owl-root pt-40 pb-80">
        <div class="ps-container">
        <div class="ps-section__header mb-50">
            <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                    <h3 class="ps-section__title" data-mask="Produk">- Produk {{$provinces->Name}}</h3>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i></a><a class="ps-next" href="#"><i class="ps-icon-arrow-left"></i></a></div>
                  </div>
            </div>
          </div>
          <div class="ps-section__content">
            @if($products->count() == 0)
                <center>Tidak ada produk</center>
            @else

                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                @foreach($products as $relate)
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
            @endif
          </div>
        </div>
</div>
@endsection