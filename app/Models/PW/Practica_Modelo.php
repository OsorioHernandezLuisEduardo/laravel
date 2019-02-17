<?php


 namespace App\Models\PW;
 use Illuminate\Database\Eloquent\Model;

 class Practica_Modelo extends Model
 {
   protected $table='practicas';
   protected $primarykey='id';
   public $timestamps=false;
   protected $fillable=[
   'id','usuario'
   ];
 }
 ?>
