<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model {
    
    public $timestamps = false;

    public function userlevel(): BelongsTo 
    {
        return $this->belongsTo(Userlevel::class,'id_userlevel','id');
    }

    public function kategori(): BelongsTo 
    {
        return $this->belongsTo(Kategori::class,'id_kategori','id');
    }
}
