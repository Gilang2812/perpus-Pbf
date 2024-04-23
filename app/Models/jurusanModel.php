<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusanModel extends Model
{
    use HasFactory;

    protected $table = 'jurusan';
    protected $primaryKey = 'id_jurusan';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;
    protected $fillable = [
        'jurusan',
    ];

    protected static function booted()
    {
        static::addGlobalScope('nonEmptyJurusan', function ($builder) {
            $builder->where('jurusan', '!=', '');
        });

        static::saving(function ($model) {
            if (empty($model->jurusan)) {
                throw new \Exception('Jurusan tidak boleh kosong');
            }
        });
    }
}