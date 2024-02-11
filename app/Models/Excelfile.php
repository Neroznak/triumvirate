<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excelfile extends Model
{
    use HasFactory;
    protected $table = 'executions';
    protected $guarded = false;
    protected $fillable = ['name', 'path']; // Защищенные поля

    // Определите отношения модели, если необходимо
}
