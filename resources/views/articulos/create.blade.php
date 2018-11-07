@extends('plantilla')

@section('content')
<br>
<br>
<div class="col-sm-8">
    <h2>
        Nuevo Articulo
        
    </h2>
    @include('articulos.fragment.error')
    Formulario

    {!! Form::open(['route' => 'articulos.store']) !!}
        
        @include('articulos.fragment.form')

    {!! Form::close() !!}
</div>


@endsection