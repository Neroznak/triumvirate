<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;



//    public_html mixed $id;
    protected $table = 'projects';
    protected $guarded = false;
    protected $fillable = [
        'title',
        'address',
        'customer',
        'deadline',
        'response',
        'status',
        'contract',
        'income',
        'expense',
    ];
}
