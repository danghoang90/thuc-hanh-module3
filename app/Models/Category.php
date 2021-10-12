<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    function coffe() {
        return $this->hasMany(Coffe::class);
    }

    function totalCategories(){
        return $this->coffe->count();
    }
}
