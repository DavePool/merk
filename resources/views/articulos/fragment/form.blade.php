<div class="form-group">
    {!! Form::label('nombre_articulo', 'Nombre del articulo') !!}
    {!! Form::text('nombre_articulo',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('descripcion_articulo', 'Descripcion  del articulo') !!}
    {!! Form::textarea('descripcion_articulo',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('existencia_articulo', 'Existencia del articulo') !!}
    {!! Form::text('existencia_articulo',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class'=>'btn btn-primary']) !!}
</div>