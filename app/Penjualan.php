<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table='penjualan';
    protected $primaryKey = 'id_penjualan';
    public $timestamps=false;

    public function Kasir()
		{
		    return $this->belongsTo('App\Kasir', 'id_kasir', 'id_kasir');
		}
    public function Buku()
    {
    	return $this->BelongsTo('App\Buku', 'id_buku', 'id_buku');
    }
}
