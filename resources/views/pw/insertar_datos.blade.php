<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>

   <div class="formulario container">
     {!!Form::open(array('url'=>'insertar','method'=>'POST','autocomplete'=>'off'))!!}

     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon1">Alumno</span>
       </div>
      {!!form::text('alumno',null,['placeholder'=>'alumno'])!!}
     </div>
     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon1">Ap paterno</span>
       </div>
      {!!form::text('appaterno',null,['placeholder'=>'apellido paterno'])!!}
     </div>
     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon1">Ap materno</span>
       </div>
      {!!form::text('apmaterno',null,['placeholder'=>'apellido materno'])!!}
     </div>
     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon1">Edad</span>
       </div>
      {!!form::number('edad',null,['placeholder'=>'18'])!!}
     </div>
     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon1">Direccion</span>
       </div>
      {!!form::text('direccion',null,['placeholder'=>'Direccion'])!!}
     </div>
     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon1">Telefono</span>
       </div>
      {!!form::number('Telefono',null,['placeholder'=>'000-000-00-00'])!!}
     </div>
      {!!form::submit('Registrar',['name'=>'grabar','id'=>'grabar','content'=>'<span>registrar</span>','class'=>'btn btn-primary btn-info'])!!}

    {!!Form::close()!!}
   </div>
  </body>
</html>
