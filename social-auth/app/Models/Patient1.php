<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient1 extends Model
{
    use HasFactory;
    protected $table = 'patient1';
    protected $fillable = ['X','Y','time'];
}
