<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'nama_barang',
        'id_type',
        'harga_sewa',
        'deskripsi',
        'foto',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class, 'id_type');
    }
}

