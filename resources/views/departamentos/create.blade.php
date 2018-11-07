@extends('plantilla')

@section('content')
<br>
<br>
<div class="col-sm-8">
    <h2>
        Nuevo Departamento
    </h2>
    @include('departamentos.fragment.error')
    Formulario

    {!! Form::open(['route' => 'departamentos.store']) !!}
        
        @include('departamentos.fragment.form')

    {!! Form::close() !!}
</div>


@endsection