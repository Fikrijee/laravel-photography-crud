@extends('fotografit.layout')
@section('content')
<div class="card"><br>
  <div class="card-header" style="background-color:#00008B; color:white; height:70px;"><h2>Faqja e shtimit te Fotografive te reja</h2></div>
  <div class="card-body">
      
      <form action="{{ url('fotografia') }}" method="post">
        @csrf
        <label style="font-size:19px;">Fotografia_umfa</label><br>
        <input type="text" name="Fotografia_umfa" id="Fotografia_umfa" class="form-control"><br>
        <label style="font-size:19px;">Fotografi_umfa</label><br>
        <input type="text" name="Fotografi_umfa" id="Fotografi_umfa" class="form-control"><br>
        <label style="font-size:19px;">Kategoria_eFotografise_umfa</label><br>
        <input type="text" name="Kategoria_eFotografise_umfa" id="Kategoria_eFotografise_umfa" class="form-control"><br>
        <input type="submit" value="Ruaj" class="btn btn-success" style="font-size: 16px; padding: 15px 30px;"><br>
    </form>
  
  </div>
</div>
@endsection
