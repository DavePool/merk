@extends('plantilla')

@section('content')
    <div class="col-sm-8">
        <h2>
            Listado de Departamentos
            <a href="{{ route('departamentos.create')}}" class="btn btn-primary pull-right"> nuevo </a>
        </h2>
        <br><br>
        @include('departamentos.fragment.info')

        <table  class="table table-hover table-striped" >
            <thead>
                <tr>
                    <th > Id </th>
                    <th > Nombre </th>
                    <th > Encargado </th>
                    <th > Extension </th>
                    <th > Rol </th>
                    <th > Modificar </th>
                    <th > Eliminar </th>
                </tr>
            </thead>
            <tbody>
            @foreach($departamentos as $departamento)
                <tr>
                    <td> {{$departamento->id}} </td>
                    <td> {{$departamento->nombre_departamento}} </td>
                    <td> {{$departamento->encargado_departamento}} </td>
                    <td> {{$departamento-   >extension_departamento}} </td>
                    <td> {{$departamento->rol_departamento}} </td>
                    <td> 
                       actualizar
                    </td>
                    <td> 
                        <form action="{{ route('departamentos.destroy', $departamento->id)}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-link"> eliminar </button>
                        </form>
                    </td>  
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $departamentos->render()!!}
        <div class="col-sm-4">
            Agregar Departamento 
        </div>
    </div>
@endsection