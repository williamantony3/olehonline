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
                  @if(Session::get('status') == 1)
                  <th>Pelanggan</th>
                  <th></th>
                  @endif
                </tr>
              </thead>
              <tbody>
              @if($transactions->count() == 0)
                <tr><td colspan="5"><center>Tidak ada transaksi</center></td></tr>
              @else
                @foreach($transactions as $transaction)
                <tr>
                  <td><b>{{$transaction->created_at}}</b><br>
                  @foreach($transaction->transactionDetails as $tranDetail)
                    {{$tranDetail->product->ProductName}} (x{{$tranDetail->Quantity}}) - Rp {{$tranDetail->Quantity * $tranDetail->product->ProductPrice}}<br>
                  @endforeach
                  </td>
                  <td>
                  @if($transaction->Status == 0)
                  <p class="text-danger">Ditolak</p>
                  @elseif($transaction->Status == 1)
                  <p class="text-danger">Belum dikonfirmasi</p>
                  @elseif($transaction->Status == 2)
                  <p class="text-success">Lunas</p>
                  @endif
                  </td>
                  <td>{{$transaction->CourierReceiptNumber}}</td>
                  @if(Session::get('status') == 1)
                  <td>{{$transaction->customer->Username}}</td>
                  <td>
                  @if($transaction->Status == 1)
                  <a href="/transactions/confirm/{{$transaction->TransactionId}}">Konfirmasi</a>
                  @endif
                  </td>
                  @endif
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection