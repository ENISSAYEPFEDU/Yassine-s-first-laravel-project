<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    protected $fillable = ['name', 'price', 'bio', 'catégorie_id'];
    /** @use HasFactory<\Database\Factories\FruitFactory> */
    use HasFactory;


    public function catégorie()
    {
        return $this->belongsTo(Catégorie::class);
    }
}
