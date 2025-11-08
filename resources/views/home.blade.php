@extends("layout")

@section("title", "RoseRestoni Admin")

@section("content")
<div class="row">
  <div class="col-md-6">
    <div class="card mb-3" style="border-radius: 10px;">
      <div class="card-body">
        <h2 class="card-title">Selamat Datang di Web Admin RoseRestoni</h2>
        <p class="card-text">Manajemen Data Resto lebih <b> FLEKSIBEL!</b></p>
        <a href="#list-top" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 d-flex align-items-center justify-content-center">
    <div class="card" style="width: 20rem; border-radius: 10px; overflow: hidden;">
      <img src="{{ asset('images/rosehip.png') }}" class="card-img-top" alt="Karakter Favorit">
    </div>
  </div>
</div>
<br><br><br><br><br>
<div class="col-md-6" id="list-top">
    <div class="card mb-3" style="border-radius: 10px;">
      <div class="card-body">
        <h2 class="card-title">List Top</h2>
      </div>
    </div>
  </div>
@endsection