<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departments_small extends Model
{
    use HasFactory;
    protected $fillable = [
        'departments_smalls_type',
        'status'
    ];
}
