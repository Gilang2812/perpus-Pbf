<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class userModel extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'id_jurusan', 'nim', 'nama', 'email', 'password', 'isAdmin'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'isAdmin' => 'boolean',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (empty($model->nama)) {
                throw new \Exception('Nama tidak boleh kosong');
            }
            if (empty($model->email)) {
                throw new \Exception('Email tidak boleh kosong');
            }
            if (empty($model->password)) {
                throw new \Exception('Password tidak boleh kosong');
            } else {
                $model->password = Hash::make($model->password);
            }
        });
    }

    public function jurusan()
    {
        return $this->belongsTo(jurusanModel::class, 'id_jurusan', 'id_jurusan');
    }
}