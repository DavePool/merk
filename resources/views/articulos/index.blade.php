@extends('plantilla')

@section('content')
    <h2>
        <br><br>
        Lista de Articulos          
        <a href="{{ route('articulos.create')}}" class="btn btn-primary pull-right"> nuevo </a>
    </h2>
    <br><br>
    @include('articulos.fragment.info')
    <div class="container">
        
        <table  class="table table-hover table-striped" >
            <thead>
                <tr>
                    <th > Id </th>
                    <th > Nombre </th>
                    <th > Descripcion </th>
                    <th > Cantidad </th>
                    <th > Modificar </th>
                    <th > Eliminar </th>
                </tr>
            </thead>
            <tbody>
            @foreach($articulos as $articulo)
                <tr>
                    <td> {{$articulo->id}} </td>
                    <td> {{$articulo->nombre_articulo}} </td>
                    <td> {{$articulo->descripcion_articulo}} </td>
                    <td> {{$articulo->existencia_articulo}} </td>
                    <td> 
                       actualizar
                    </td>
                    <td> 
                        <form action="{{ route('articulos.destroy', $articulo->id)}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-link"> eliminar </button>
                        </form>
                    </td>  
                </tr>
            @endforeach
            </tbody>
        </table>
        
        {!! $articulos->render()!!}
    </div>

<script>

@endsection