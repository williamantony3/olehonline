@extends('base')
@section('content')

<div class="ps-contact ps-section pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                  <div class="ps-section__header mb-50">
                    <h2 class="ps-section__title" data-mask="Ubah Gambar">- Ubah Gambar</h2>
                    <form class="ps-contact__form" action="/product/changePic/{{$product->ProductId}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                      <div class="row">
                      @if(Session::has('alert-success'))
                      <div class="alert alert-success">
                        <div>{{Session::get('alert-success')}}, silahkan <a href="#" data-toggle="modal" data-target="#myModal" style="text-decoration:underline;">masuk</a></div>
                      </div>
                      @endif<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group">
                                <label>Gambar<sub>*</sub></label>
                                <input type="file" placeholder="" name="ProductImage" required="required" accept=".jpg">
                              </div><br><br>
                              <div class="form-group">
                                <button class="ps-btn" type="submit">Simpan<i class="ps-icon-next"></i></button>
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