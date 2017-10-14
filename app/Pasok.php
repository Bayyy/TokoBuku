<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    protected $table = 'pasok';
    protected $primaryKey = 'id_pasok';
    public $timestamps = false;

    public function Distributor()
		{
		    return $this->belongsTo('App\Distributor', 'id_distributor', 'id_distributor');
		}
    public function Buku()
    {
    	return $this->BelongsTo('App\Buku', 'id_buku', 'id_buku');
    }
}
