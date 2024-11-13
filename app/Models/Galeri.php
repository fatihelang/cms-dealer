<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'ms_galeri';
    protected $fillable = [
        'judul', 
        'foto', 
        'tanggal', 
        'slug'];
}
