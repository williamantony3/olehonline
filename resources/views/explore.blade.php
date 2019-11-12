@extends('base')
@section('content')
<div class="ps-content pt-80 pb-80">
        <div class="ps-container">
            <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                    <h3 class="ps-section__title" data-mask="Indonesia">- Jelajah Nusantara</h3>
            <img src="/assets/images/indonesia.jpg" alt="">
                    <p>Merupakan rubrik khusus dimana pelanggan bisa mengenal lebih dalam tentang Indonesia. Berikut info tentang provinsi-provinsi di Indonesia: </p>
                  </div>
            </div>
            <ul class="ps-list--arrow">
                @foreach($provinces as $province)
                <li><a href="/province/detail/{{$province->ProvinceId}}">{{$province->Name}}</a></li>
                @endforeach
            </ul>
        </div>
</div>
@endsection