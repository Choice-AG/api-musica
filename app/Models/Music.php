<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist',
        'genre',
        'year',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'year' => 'integer',
    ];

    public function providers()
    {
        return $this->belongsToMany(Provider::class);
    }
}
