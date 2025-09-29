<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catégorie extends Model
{
    protected $fillable = ['name', 'location', 'description'];
    /** @use HasFactory<\Database\Factories\CatégorieFactory> */
    use HasFactory;


    public function fruits()
    {
        return $this->hasMany(Fruit::class);
    }
}
