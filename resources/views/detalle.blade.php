@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="card mb-3">
                    <div class="card-header">{{$libro->fecha->format('d M Y')}}</div>
                    
                    <div class="card-body">
                        <h3><strong>{{ $libro->titulo }}</strong></h3>
                        </h3>
                        <p><strong>Cliente:</strong> {{ $libro->categoria->nombre }}</p>
                        <p><strong>Descripcion:</strong> {{ $libro->descripcion }}</p>
                        <p><strong>Detalle de compra:</strong> {{ $libro->contenido }}</p>
                        <div>
<h4><strong>Productos comprados:</strong></h4>
                            @foreach ($libro->etiquetas as $tag)
                           <h5><span class="badge badge-primary">{{ $tag->nombre }}</span></h5>
                            @endforeach

                        </div>
                    </div>
                </div>
        </div>
    </div>
    <example-component></example-component>
</div>
@endsection