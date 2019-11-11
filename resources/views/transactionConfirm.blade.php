@extends('base')
@section('content')
<div class="ps-checkout pt-80 pb-80">
        <div class="ps-container">
          <!-- <form class="ps-checkout__form" action="/transactions/add" method="post" enctype="multipart/form-data"> -->
            {{csrf_field()}}
            <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                    <div class="ps-checkout__billing">
                      <h3>Konfirmasi</h3>
                      <div class="form-group form-group--inline">
                        <label>Bukti Pembayaran</label>
                        <img src="/assets/images/bukti/{{$transaction->PaidReceipt}}" alt="">
                      </div><br>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <div class="ps-checkout__order">
                      <header>
                        <h3>Detail Pesanan</h3>
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
                          @foreach($transaction->transactionDetails as $tranDet)
                            <tr>
                              <td>{{$tranDet->product->ProductName}} x{{$tranDet->Quantity}}</td>
                              <td>{{$tranDet->product->ProductPrice * $tranDet->Quantity}}</td>
                            </tr>
                            <?php $total += $tranDet->product->ProductPrice * $tranDet->Quantity; ?>
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
                        <h3>Aksi</h3>
                        <div class="form-group cheque">
                          
                          <a href="/transactions/accept/{{$transaction->TransactionId}}"><button class="ps-btn ps-btn--fullwidth">Terima<i class="ps-icon-next"></i></button></a><br><br>
                          <a href="/transactions/deny/{{$transaction->TransactionId}}"><button class="ps-btn ps-btn--fullwidth" style="background-color: #800000;">Tolak<i class="ps-icon-next"></i></button></a>
                        </div>
                      </footer>
                    </div>
                  </div>
            </div>
          <!-- </form> -->
        </div>
      </div>
@endsection