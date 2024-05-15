<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProvider extends Model
{
    use HasFactory;

    protected $table = 'provider_music';

    protected $fillable = [
        'provider_id',
        'music_id',
    ];

    public $timestamps = false;

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }

    public function music()
    {
        return $this->belongsTo(Music::class, 'music_id');
    }
}

