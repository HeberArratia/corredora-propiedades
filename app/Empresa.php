<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Propiedad;

class Empresa extends Model
{
  protected $table = 'empresa';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre', 'email', 'descripcion', 'web', 'telefono', 'id_user',
  ];

  public function users() {
    return $this->belongsTo(User::class, 'id_user');
  }
  
  public function propiedades() {
    return $this->hasMany(Propiedad::class, 'id_empresa');
  }

}
