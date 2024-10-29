<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'dni',
        'title',
        'description',
        'expiration_date',
        'status'
    ];

    protected $casts = [
        'expiration_date' => 'date',
    ];
}
