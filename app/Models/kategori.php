<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategoris';

    public function barang()
    {
        return $this->hasMany(barang::class, 'kategori_id');
    }
}
