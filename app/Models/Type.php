<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'type';

    protected $fillable = ['nama_type'];

    public function barangs()
    {
        return $this->hasMany(Barang::class, 'id_type');
    }
}
