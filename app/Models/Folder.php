<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public static function booted()
    {
        static::creating(static function ($model) {
            $model->uuid = Str::uuid();
        });
    }
}
