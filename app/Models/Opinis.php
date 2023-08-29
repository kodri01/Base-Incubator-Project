<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinis extends Model
{

    use HasFactory;

    protected $fillable = ['opinion', 'gambar', 'nama'];


    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('opinion', 'like', '%' . request('search') . '%');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}