@extends('base')
@section('content')

<div class="ps-contact ps-section pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                  <div class="ps-section__header mb-50">
                    <h2 class="ps-section__title" data-mask="Ubah Profil">- Ubah Profil</h2>
                    <form class="ps-contact__form" action="{{url('/editProfilePost')}}" method="post">
                    {{csrf_field()}}
                      <div class="row">
                      @if(Session::has('alert-success'))
                      <div class="alert alert-success">
                        <div>{{Session::get('alert-success')}}</div>
                      </div>
                      @endif
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group">
                                <label>Nama <sub>*</sub></label>
                                <input class="form-control" type="text" placeholder="" name="nama" required="required" value="{{$customer->Name}}">
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group">
                                <label>Email <sub>*</sub></label>
                                <input class="form-control" type="email" placeholder="" name="email" required="required" value="{{$customer->Email}}">
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group">
                                <label>Username <sub>*</sub></label>
                                <input class="form-control" type="text" placeholder="" name="username" required="required" value="{{$customer->Username}}">
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group">
                                <label>Password <sub>*</sub></label>
                                <input class="form-control" type="password" placeholder="" name="password" required="required">
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group mb-25">
                                <label>Alamat <sub>*</sub></label>
                                <textarea class="form-control" rows="6" name="alamat">{{$customer->Address}}</textarea>
                              </div>
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