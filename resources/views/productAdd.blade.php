@extends('base')
@section('content')

<div class="ps-contact ps-section pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                  <div class="ps-section__header mb-50">
                    <h2 class="ps-section__title" data-mask="Tambah">- Tambah</h2>
                    <form class="ps-contact__form" action="{{url('/addProductPost')}}" method="post">
                    {{csrf_field()}}
                      <div class="row">
                      @if(Session::has('alert-success'))
                      <div class="alert alert-success">
                        <div>{{Session::get('alert-success')}}, silahkan <a href="#" data-toggle="modal" data-target="#myModal" style="text-decoration:underline;">masuk</a></div>
                      </div>
                      @endif
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group">
                                <label>Nama Produk <sub>*</sub></label>
                                <input class="form-control" type="text" placeholder="" name="ProductName" required="required">
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group">
                                <label>Asal <sub>*</sub></label>
                                <select name="ProvinceId" class="form-control" required="required">
                                    @foreach($provinces as $province)
                                    <option value="{{$province->ProvinceId}}">{{$province->Name}}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group">
                                <label>Jenis <sub>*</sub></label>
                                <select name="ProductTypeId" class="form-control" required="required">
                                    @foreach($productTypes as $productType)
                                    <option value="{{$productType->ProvinceId}}">{{$productType->ProductTypeName}}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group">
                                <label>Harga <sub>*</sub></label>
                                <input class="form-control" type="number" placeholder="" name="ProductPrice" required="required">
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group mb-25">
                                <label>Deskripsi <sub>*</sub></label>
                                <textarea class="form-control" rows="6" name="Description"></textarea>
                              </div>
                              <div class="form-group">
                                <button class="ps-btn" type="submit">Daftar<i class="ps-icon-next"></i></button>
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group">
                                <label>Stok <sub>*</sub></label>
                                <input class="form-control" type="number" placeholder="" name="ProductStock" required="required">
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group">
                                <label>Harga <sub>*</sub></label>
                                <input class="form-control" type="number" placeholder="" name="ProductPrice" required="required">
                              </div>
                              <div class="form-group">
                                <button class="ps-btn" type="submit">Daftar<i class="ps-icon-next"></i></button>
                              </div>
                            </div>
                      </div>
                    </form>
                  </div>
                </div>
          </div>
        </div>
      </div>
@endsection