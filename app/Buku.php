<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    public $timestamps = false;

    public function Pasok()
    {
    	return $this->hasMany('App\Pasok');
    }
    public function Penjualan()
    {
    	return $this->hasMany('App\Penjualan');
    }
}
