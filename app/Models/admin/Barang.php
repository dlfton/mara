<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table= 'barang';

    protected $fillable = [
        'nama',
        'kategori_id',
        'anime',
        'harga',
        'gambar',
        'status',
        'estimasi',
        'desc',
    ];

    public function kategori()
    {
        return $this->belongsTo('App\Models\admin\Kategori');
    }
}
