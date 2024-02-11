<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $table = 'works';
    protected $guarded = false;
    protected $fillable = [
        'title',
        'measure',
        'amount',
        'cost',
        'total',
        'project_id',
        'comment',
    ];
}
