<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownloadManagers extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'file',
        'file_type',
        'size',
    ];

    // protected static function booted()
    // {
    //     static::creating(function ($model) {
    //         $model->file_type = 'default/type';
    //         $model->size = 0; 
    //     });
    // }
}
