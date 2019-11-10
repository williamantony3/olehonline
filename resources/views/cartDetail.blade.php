@extends('base')
@section('content')
<div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <table class="table ps-cart__table">
              <thead>
                <tr>
                  <th>Produk</th>
                  <th>Harga</th>
                  <th>Kuantitas</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              @if($carts->count() == 0)
                <tr><td colspan="5"><center>Tidak ada produk</center></td></tr>
              @else
                <?php $total = 0 ?>
                @foreach($carts as $cart)
                <tr>
                  <td><a class="ps-product__preview" href="/product/detail/{{$cart->ProductId}}"><img class="mr-15" src="/assets/images/product/{{$cart->product->ProductImage}}" alt="" style="width:100px; height:100px;">{{$cart->product->ProductName}}</a></td>
                  <td>Rp {{$cart->product->ProductPrice}}</td>
                  <td>
                    <!-- <div class="form-group--number">
                      <button class="minus"><span>-</span></button>
                      <input class="form-control" type="text" value="2">
                      <button class="plus"><span>+</span></button>
                    </div> -->
                    {{$cart->Quantity}}
                  </td>
                  <td>Rp {{$cart->Quantity * $cart->product->ProductPrice}}</td>
                  <td>
                    <a href="/cart/delete/{{$cart->CartId}}"><div class="ps-remove"></div></a>
                  </td>
                </tr>
                <?php $total += $cart->Quantity * $cart->product->ProductPrice; ?>
                @endforeach
                @endif
              </tbody>
            </table>
            <div class="ps-cart__actions">
              <div class="ps-cart__promotion">
                <div class="form-group">
                  <a href="{{url('/')}}"><button class="ps-btn ps-btn--gray">Lanjut belanja</button></a>
                </div>
              </div>
              @if($carts->count()!=0)
              <div class="ps-cart__total">
                <h3>Total Bayar: <span> Rp <?php echo $total; ?> </span></h3><a class="ps-btn" href="checkout.html">Bayar<i class="ps-icon-next"></i></a>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
@endsection