<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';

    public function kategoris() {
    	return $this->belongsTo('App\Kategori');
    }
}
