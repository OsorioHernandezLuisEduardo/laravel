<?php


 namespace App\Models\PW;
 use Illuminate\Database\Eloquent\Model;

 class modelo_tienda extends Model
 {
   protected $table='tienda';
   protected $primarykey='id';
   public $timestamps=false;
   protected $fillable=[
   'razon_social','rfc','dueno','direccion','tipo_empresa','telefono','fecha'
   ];
 }
 ?>
