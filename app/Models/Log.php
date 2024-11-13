<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Log extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id', 'aktivitas', 'deskripsi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}