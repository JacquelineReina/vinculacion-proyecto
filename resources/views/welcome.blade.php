@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach ($libros as $item)
                <div class="card mb-3">
                    <div class="card-header">{{$item->fecha->format('d M Y')}}</div>
                    
                    <div class="card-body">
                        <h3>
                          <a href="{{route('libros.detalle', $item)}}">
                            {{ $item->titulo }}
                          </a>
                        </h3>
                        </h3>
                        <p>Cliente: {{ $item->categoria->nombre }}</p>
                        <p>Descripcion: {{ $item->descripcion }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection