<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'setting';
    protected $fillable = [
        'nama_setting', 
        'display_name', 
        'icon', 
        'form', 
        'value'];
}
