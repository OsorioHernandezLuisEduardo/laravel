<?php
namespace App\Http\Controllers\pw_controller;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\PW\modelo_alumno;//nombre del modelo,
use App\Models\PW\Practica_Modelo;//nombre del modelo,
use App\Models\PW\modelo_tienda;

class Micontrolador extends Controller{

  public function index(){
    return view ('pw/hola');//direccion de los archivoPs php Carpeta de vistas.. nombre del archivo php
  }
  public function login(){
    return view ('pw/login');
  }
  public function ver_datos(){
    $practica1=Practica_Modelo::
    select('id','usuario')->get();
    return $practica1;
  }
  public function verblade(){
    $practica1=Practica_Modelo::
    select ('id','usuario')->take(1)->first();
    return view('pw/ver_datos')->with('variable',$practica1);
  }
  public function veralmno(){
    $practica1=modelo_alumno::
    select ('alumno','appaterno','apmaterno','edad','direccion','telefono')->take(1)->first();
    return view('pw/veralumno')->with('variable',$practica1);
  }
  public function verform(){
    return view('pw/insertar_datos');
  }
  public function insertar(Request $request){
    $alumno=$request->input('alumno');
    $appaterno=$request->input('appaterno');
    $apmaterno=$request->input('apmaterno');
    $edad=$request->input('edad');
    $direccion=$request->input('direccion');
    $telefono=$request->input('telefono');
    modelo_alumno::create(['alumno'=>$alumno,'appaterno'=>$appaterno,'apmaterno'=>$apmaterno,'edad'=>$edad,'direccion'=>$direccion,'telefono'=>$telefono]);
    return redirect()->to('veralumno');
  }
  public function insertartienda2(Request $request){
    $razon_social=$request->input('razon_social');
    $rfc=$request->input('rfc');
    $dueno=$request->input('dueno');
    $direccion=$request->input('direccion');
    $tipo_empresa=$request->input('tipo_empresa');
    $telefono=$request->input('telefono');
    $fecha=$request->input('fecha');
    modelo_tienda::create(['razon_social'=>$razon_social,'rfc'=>$rfc,'dueno'=>$dueno,'direccion'=>$direccion,
                          'tipo_empresa'=>$tipo_empresa,'telefono'=>$telefono,'fecha'=>$fecha]);
    return redirect()->to('veralumno');
  }
  public function vertienda(){
    return view('pw/insertar_tienda');
  }

}

//variable interaccion con la trader_cdl3blackcrows
//todo lo que haga controler , controller liberia interna

 ?>
