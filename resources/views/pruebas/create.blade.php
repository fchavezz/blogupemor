{!!Form::open(['route'=>'prueba.store','role'=>'form', 'method'=>'POST','autocomplete'=>'off','enctype'=>'multipart/form-data'])!!}
{{ csrf_field() }}

<div class="form-group">
    {!!Form::label('Nombre','Nombre:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre','required','autocomplete'=>'off'])!!}
</div>
<div class="form-group">
    {!!Form::label('Fecha','Fecha:')!!}
    {!! Form::text('datepicker', null, array('date-format'=>'yy-mm-dd','type' => 'text', 'class' => 'form-control date','placeholder' => 'Marca la fecha', 'id' => 'datepicker')) !!}
</div>

<div class="form-group">
    {!!Form::label('Lista numerica','Lista numerica:')!!}
    {!! Form::select('status',[0, 1, 2,3,4,5,6,7,8,9], null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!!Form::label('Subir imagen','Subir imagen:')!!}
    {!!Form::file('imagen',['id'=>'imagen'])!!}

</div>
<div class="form-group">
    {!!Form::label('Correo','Correo')!!}
    {!!Form::email('email',null,['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('nota','Registra la nota')!!}
    {!!Form::textarea('blog',null,['class' => 'form-control'])!!}
</div>
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}

