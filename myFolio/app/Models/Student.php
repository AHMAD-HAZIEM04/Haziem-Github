<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'matric_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
