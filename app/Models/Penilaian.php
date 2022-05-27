<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $table = 'penilaians';
    protected $fillable = ['id_username', 'persantasi', 'aplikasi', 'username'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
