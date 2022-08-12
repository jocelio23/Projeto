<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anexos extends Model
{
    protected $fillable = [
        'link',
        'texto',
        'id_postagens'
    ];

    public function postagens(): BelongsToMany
    {
        return $this->belongsToMany(Postagens::class);
    }
}
