@extends('base')
@section('content')
<div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <table class="table ps-cart__table">
              <thead>
                <tr>
                  <th>Transaksi</th>
                  <th>Status</th>
                  <th>Nomor Resi</th>
                </tr>
              </thead>
              <tbody>
              @if($transactions->count() == 0)
                <tr><td colspan="5"><center>Tidak ada transaksi</center></td></tr>
              @else
                @foreach($transactions as $transaction)
                <tr>
                  <td><a class="ps-product__preview" href="/transactions/detail/{{$transaction->TransactionId}}">{{$transaction->TransactionId}}</a></td>
                  <td>
                  @if($transaction->Status == 0)
                  Belum Bayar
                  @elseif($transaction->Status == 1)
                  Belum dikonfirmasi
                  @elseif($transaction->Status == 2)
                  Lunas
                  @endif
                  </td>
                  <td>{{$transaction->CourierReceiptNumber}}</td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection