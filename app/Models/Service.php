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
        'user_id',
        'category_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function category()
    {
        return $this->belongsTo(Categorie::class, 'id');
    }
    // public function services(): HasMany
    // {
    //     return $this->hasMany(Service::class);
    // }

    use HasFactory;
}

