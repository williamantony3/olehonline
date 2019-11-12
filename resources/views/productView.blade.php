@extends('base')
@section('content')
<div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <a href="/product/add" class="ps-btn">Tambah</a><br><br>
            <table class="table ps-cart__table">
              <thead>
                <tr>
                  <th>Produk</th>
                  <th>Gambar</th>
                  <th>Asal</th>
                  <th>Jenis</th>
                  <th>Stok</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @if($products->count() == 0)
                <tr><td colspan="5"><center>Tidak ada produk</center></td></tr>
              @else
                @foreach($products as $product)
                <tr>
                  <td><a href="/product/detail/{{$product->ProductId}}">{{$product->ProductName}}</a></td>
                  <td><a href="/assets/images/product/{{$product->ProductImage}}"><img src="/assets/images/product/{{$product->ProductImage}}" alt="" style="width:100px; height:100px;"></a></td>
                  <td>{{$product->province->Name}}</td>
                  <td>{{$product->productType->ProductTypeName}}</td>
                  <td>{{$product->ProductStock}}</td>
                  <td><a href="/product/edit/{{$product->ProductId}}">Ubah</a> | <a href="/product/delete/{{$product->ProductId}}">Hapus</a> | <a href="/product/changePictureForm/{{$product->ProductId}}">Ganti Gambar</a></td>
                  
                </tr>
                @endforeach
              @endif
              </tbody>
            </table>
            {{ $products->links() }}
          </div>
        </div>
      </div>
@endsection