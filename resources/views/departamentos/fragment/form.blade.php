<div class="form-group">
    {!! Form::label('nombre_departamento', 'Nombre del departamento') !!}
    {!! Form::text('nombre_departamento',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('encargado_departamento', 'Encargado del departamento') !!}
    {!! Form::text('encargado_departamento',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('extension_departamento', 'Extension del departamento') !!}
    {!! Form::text('extension_departamento',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('rol_departamento', 'Rol del encargado') !!}
    {!! Form::text('rol_departamento',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password_departamento', 'Password del usuario') !!}
    {!! Form::password('password_departamento',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class'=>'btn btn-primary']) !!}
</div>