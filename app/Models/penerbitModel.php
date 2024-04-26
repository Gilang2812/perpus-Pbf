<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerbitModel extends Model
{
    use HasFactory;

    protected $table = 'penerbit';
    protected $primaryKey = 'id_penerbit';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'nama_penerbit'
    ];

    public function buku()
    {
        return $this->hasMany(bukuModel::class, 'id_penerbit', 'id_penerbit');
    }
}