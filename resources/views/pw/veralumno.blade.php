<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    {!!Form::label('Alumno: ')!!}
    <br>
    {!!form::text('alumno:',$variable->alumno )!!}
    <br>
    {!!Form::label('Appaterno: ')!!}
    <br>
    {!!form::text('Appaterno:',$variable->appaterno)!!}
    <br>
    {!!Form::label('Apmaterno: ')!!}
    <br>
    {!!form::text('Apmaterno:',$variable->apmaterno)!!}
    <br>
    {!!Form::label('edad: ')!!}
    <br>
    {!!form::number('edad:',$variable->edad)!!}
    <br>
    {!!Form::label('direccion: ')!!}
    <br>
    {!!form::text('direccion:',$variable->direccion)!!}
    <br>
    {!!Form::label('telefono: ')!!}
    <br>
    {!!form::number('telefono:',$variable->telefono)!!}
  </body>
</html>
