<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table="pagos";
    protected $fillable=['tipo_pago'];

    public function comandas(){
        return $this->hasMany('App\Comanda','id_comanda');
    }
}
