<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient3 extends Model
{
    use HasFactory;
    protected $table = 'patient3';
    protected $fillable = ['X','Y','time'];
}
