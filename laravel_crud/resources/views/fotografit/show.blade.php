@extends('fotografit.layout')
@section('content')
<div class="card">
  <div class="card-header">Faqja e Fotografive</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Fotografia_umfa : {{ $fotografit->FullName }}</h5>
        <p class="card-text">Fotografi_umfa : {{ $fotografit->Text }}</p>
        <p class="card-text">Kategoria_eFotografise_umfa : {{ $fotografit->Price }}</p>
  </div>
      
    </hr>
  
  </div>
</div>