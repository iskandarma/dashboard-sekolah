<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model {
    
    /**
     * $fillable adalah kolom yang dapat diisi
     * $guarded adalah kolom yang tidak dapat diisi atau kebalikan dari fillable
     * fillable dan guarded digunakan salah satu aja
     *  */ 
    // protected $fillable = ['name'];
    protected $guarded = [];
    protected $hidden = ['created_at'];

    public function userlevel(): BelongsTo 
    {
        return $this->belongsTo(Userlevel::class,'id_userlevel','id');
    }

    public function kategori(): BelongsTo 
    {
        return $this->belongsTo(Kategori::class,'id_kategori','id');
    }
}
