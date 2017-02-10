<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
        protected $table = "tb_pruebas";

    /**
     * Prueba constructor.
     * @param string $table
     */
    protected $fillable = ['namecat','created_at','status','redaccion','url','email'];

}
