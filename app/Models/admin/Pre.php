<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pre extends Model
{
    use HasFactory;
    protected $table = 'preorder';

    protected $fillable = [
        'code',
        'users_id',
        'barang_id',
        'status',
        'po',
        'quantity',
        'bukti'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function barang()
    {
        return $this->belongsTo('App\Models\admin\Barang');
    }
}
