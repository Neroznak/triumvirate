<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Execution extends Model
{
    use HasFactory;
    protected $table = 'executions';
    protected $guarded = false;
    protected $fillable = [
        'title',
        'performer',
        'project_id',

    ];
}
