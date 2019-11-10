@extends('base')
@section('content')
<div class="ps-checkout pt-80 pb-80">
        <div class="ps-container">
          <form class="ps-checkout__form" action="/transactions/add" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                    <div class="ps-checkout__billing">
                      <h3>Alamat Pengiriman</h3>
                      <div class="form-group form-group--inline textarea">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="5" name="alamat_pengiriman" required="required"></textarea>
                      </div>
                      <div class="form-group form-group--inline">
                        <label>Kurir</label>
                        <select name="kurir" id="" class="form-control" required="required">
                            <option value="OlehOnline Express">OlehOnline Express</option>
                        </select>
                      </div><br>
                      <h3>Unggah Bukti Bayar</h3>
                      <div class="form-group form-group--inline">
                        <label>Bukti Bayar</label>
                        <input type="file" name="bukti" required="required" accept=".jpg">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <div class="ps-checkout__order">
                      <header>
                        <h3>Pesanan Anda</h3>
                      </header>
                      <div class="content">
                        <table class="table ps-checkout__products">
                          <thead>
                            <tr>
                              <th class="text-uppercase">Produk</th>
                              <th class="text-uppercase">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php $total = 0; ?>
                          @foreach($carts as $cart)
                            <tr>
                              <td>{{$cart->product->ProductName}} x{{$cart->Quantity}}</td>
                              <td>{{$cart->product->ProductPrice * $cart->Quantity}}</td>
                            </tr>
                            <?php $total += $cart->product->ProductPrice * $cart->Quantity; ?>
                            @endforeach
                            <tr>
                                <td>Ongkos Kirim</td>
                                <td>10000</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>Rp <?php $total+=10000; echo $total; ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <footer>
                        <h3>Metode Pembayaran</h3>
                        <div class="form-group cheque">
                          <div class="ps-radio">
                            <input class="form-control" type="radio" id="rdo01" name="metode_pembayaran" checked value="Transfer Bank">
                            <label for="rdo01">Transfer Bank</label>
                            <p>atas nama OlehOnline<br>BCA : 0987877890<br>BRI : 0876677261<br>OCBC : 9887766776</p>
                          </div>
                          <button class="ps-btn ps-btn--fullwidth" type="submit">Bayar<i class="ps-icon-next"></i></button>
                        </div>
                      </footer>
                    </div>
                  </div>
            </div>
          </form>
        </div>
      </div>
@endsection