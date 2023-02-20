<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $table    = 'agencies';
    protected $fillable = ['name'];
    protected $guarded  = ['id'];
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }
}
