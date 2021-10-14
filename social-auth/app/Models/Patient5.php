<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient5 extends Model
{
    use HasFactory;
    protected $table = 'patient5';
    protected $fillable = ['X','Y','time'];
}
