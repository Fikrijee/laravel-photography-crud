@extends('fotografit.layout')
@section('content')
    <!-- <div class="container mt-3" > -->
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="width:1300px;  ">
                    <div class="card-header" style="background-color: #00008B; color:white; padding:10px; text-align:center;">
                        <h2 style="margin:0;">Uebaplikacioni për Menaxhimin e Fotografive Artistike (UMFA)</h2>
                    </div><br>
                    
                    <div class="card-body" style="padding:25px;">
                        <a href="{{ url('/fotografia/create') }}" class="btn btn-success btn-md" title="Shto Fotografi">
                            <i class="fa fa-plus" aria-hidden="true"></i> Shto Fotografi
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr style="color:#00008B;">
                                        <th>ID</th>
                                        <th>Fotografia_umfa</th>
                                        <th>Fotografi_umfa</th>
                                        <th>Kategoria_eFotografise_umfa</th>
                                        <th style="width: 180px; text-align:center;">Veprimet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($fotografit as $item)
                                    <tr >
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->Fotografia_umfa }}</td>
                                        <td>{{ $item->Fotografi_umfa }}</td>
                                        <td>{{ $item->Kategoria_eFotografise_umfa }}</td>
                                        <td>
                                        <a href="{{ url('/fotografia/' . $item->id . '/edit') }}" title="Perditeso Fotografi"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Perditeso</button></a>
                                            <form method="POST" action="{{ url('/fotografia' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Fshi Fotografi" onclick="return confirm(&quot;A jeni të sigurt që dëshironi ta fshini?&quot;)" style="width:75px"><i class="fa fa-trash-o" aria-hidden="true"></i> Fshije</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
    @if(session('flash_message'))
    <div class="alert alert-success">
        {{ session('flash_message') }}
    </div>
    <meta http-equiv="refresh" content="5"> <!-- Refresh the page after 5 seconds -->
@endif

@endsection

    
       
                    
                   
                        
                                