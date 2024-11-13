<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'ms_artikel';
    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'tanggal',
        'meta_deskripsi',
        'meta_keywords',
        'view_count',
        'gambar',
        'file',
        'user_id',
    ];

    protected $casts = [
        'gambar' => 'array',
    ];

    // Relasi ke tabel users
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Mendapatkan metadata untuk SEO
    public function getMetaData()
    {
        return [
            'meta_description' => $this->meta_deskripsi,
            'meta_keywords' => $this->meta_keywords,
            'og_site_name' => config('solomitsubishi'),
            'og_type' => 'article',
            'og_title' => $this->judul,
            'og_description' => $this->meta_deskripsi,
            'og_url' => url('/artikel/' . $this->slug),
        ];
    }
}
