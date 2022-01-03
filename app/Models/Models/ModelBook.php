<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table = 'model_books';
    protected $fillable = ['title', 'genero', 'autor'];
    use HasFactory;
}
