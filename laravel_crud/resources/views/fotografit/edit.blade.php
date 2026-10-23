@extends('fotografit.layout')
@section('content')
<div class="card">
  <div class="card-header" style="background-color:#00008B; color:white; height:70px; font-size:30px">Faqja e Përditësimit të Dhënave</div>
  <div class="card-body">
      
      <form action="{{ url('fotografia/' . $fotografit->id) }}" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" id="id" value="{{ $fotografit->id }}" />
        <label style="font-size:19px;">Fotografia_umfa</label><br>
        <input type="text" name="Fotografia_umfa" id="Fotografia_umfa" value="{{ $fotografit->Fotografia_umfa }}" class="form-control"><br>
        <label style="font-size:19px;">Fotografi_umfa</label><br>
        <input type="text" name="Fotografi_umfa" id="Fotografi_umfa" value="{{ $fotografit->Fotografi_umfa }}" class="form-control"><br>
        <label style="font-size:19px;">Kategoria_eFotografise_umfa</label><br>
        <input type="text" name="Kategoria_eFotografise_umfa" id="Kategoria_eFotografise_umfa" value="{{ $fotografit->Kategoria_eFotografise_umfa }}" class="form-control"><br>
        <input type="submit" value="Perditeso" class="btn btn-success" style="font-size: 16px; padding: 12px 30px;"><br>
    </form>
  
  </div>
</div>
@endsection
