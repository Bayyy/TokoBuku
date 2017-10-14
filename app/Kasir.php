<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $table = 'kasir';
    protected $primaryKey = 'id_kasir';
    public $timestamps=false;

    public function Kasir()
    {
    	return $this->hasMany('App\Kasir');
    }
}
