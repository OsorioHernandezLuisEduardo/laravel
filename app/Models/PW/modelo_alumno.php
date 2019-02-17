<?php


 namespace App\Models\PW;
 use Illuminate\Database\Eloquent\Model;

 class modelo_alumno extends Model
 {
   protected $table='alumno';
   protected $primarykey='id';
   public $timestamps=false;
   protected $fillable=[
   'id','alumno','appaterno','apmaterno','edad','direccion','telefono'
   ];
 }
 ?>
