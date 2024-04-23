<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

class fakultasModel extends Model
{
    use HasFactory;

    protected $table = 'fakultas';
    protected $primaryKey = 'id_fakultas';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;
    protected $fillable = [
        'fakultas',
    ];

    protected static function booted()
    {
        static::addGlobalScope('nonEmptyFakultas', function (Builder $builder) {
            $builder->where('fakultas', '!=', '');
        });

        static::saving(function ($model) {
            if (empty($model->fakultas)) {
                throw new \Exception('Fakultas tidak boleh kosong');
            }
        });
    }

    public function jurusan(): HasMany
    {
        return $this->hasMany(jurusanModel::class, 'id_fakultas');
    }
}