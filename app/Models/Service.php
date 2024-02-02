<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $fillable = [
        'titre',
        'description',
        'price',
        'user_id',
        'category_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }

    use HasFactory;
}

