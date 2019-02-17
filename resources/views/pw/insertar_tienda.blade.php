<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    {!!Form::open(array('url'=>'insertartienda2','method'=>'POST','autocomplete'=>'off','class'=>'form-vertical'))!!}
    {!!Form::label('razon_social: ')!!}
    <br>
    {!!form::text('razon_social',null)!!}
    <br>
    {!!Form::label('rfc: ')!!}
    <br>
    {!!form::text('rfc',null)!!}
    <br>
    {!!Form::label('dueno: ')!!}
    <br>
    {!!form::text('dueno',null)!!}
    <br>
    {!!Form::label('direccion: ')!!}
    <br>
    {!!form::text('direccion',null)!!}
    <br>
    {!!Form::label('tipo_empresa: ')!!}
    <br>
    {!!form::text('tipo_empresa',null)!!}
    <br>
    {!!Form::label('telefono: ')!!}
    <br>
    {!!form::number('telefono',null)!!}
    <br>
    {!!Form::label('fecha: ')!!}
    <br>
    {!!form::date('fecha',null)!!}

    {!!form::submit('Registrar',['name'=>'grabar','id'=>'grabar','content'=>'<span>registrar</span>','class'=>'button-primary'])!!}

    {!!Form::close()!!}

  </body>
</html>
