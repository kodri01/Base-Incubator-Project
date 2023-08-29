<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jabatan',
        'gambar',
        'facebook',
        'instagram',
        'twitter',
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('jabatan', 'like', '%' . request('search') . '%');
        }
    }
}