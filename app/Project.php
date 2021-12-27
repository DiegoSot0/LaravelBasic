<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //protected $fillable=['title','url','description']; //para insertar masivamente
    protected $guarded =[]; //lo que no queremos que inserte o asignar se utiliza cuando no usamos request()->all();
    public function getRouteKeyName()
    {
        return 'url';
    }
}
