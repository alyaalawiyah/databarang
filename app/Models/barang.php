<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barangs';
    protected $primaryKey = 'kode_barang';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['kode_barang', 'nama_barang', 'harga', 'kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
