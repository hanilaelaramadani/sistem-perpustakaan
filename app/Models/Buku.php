<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'judul_buku', 
        'penulis', 
        'penerbit', 
        'tahun_terbit', 
        'kategori_id'
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
