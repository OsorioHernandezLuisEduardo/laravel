<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    {!!Form::open(array('url'=>'insertar','method'=>'POST','autocomplete'=>'off','class'=>'form-vertical'))!!}
    {!!Form::label('Alumno: ')!!}
    <br>
    {!!form::text('alumno',null)!!}
    <br>
    {!!Form::label('Appaterno: ')!!}
    <br>
    {!!form::text('appaterno',null)!!}
    <br>
    {!!Form::label('Apmaterno: ')!!}
    <br>
    {!!form::text('apmaterno',null)!!}
    <br>
    {!!Form::label('edad: ')!!}
    <br>
    {!!form::number('edad',null)!!}
    <br>
    {!!Form::label('direccion: ')!!}
    <br>
    {!!form::text('direccion',null)!!}
    <br>
    {!!Form::label('telefono: ')!!}
    <br>
    {!!form::number('telefono',null)!!}

    {!!form::submit('Registrar',['name'=>'grabar','id'=>'grabar','content'=>'<span>registrar</span>','class'=>'btn btn-lg btn-info'])!!}

    {!!Form::close()!!}

  </body>
</html>
