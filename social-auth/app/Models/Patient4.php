<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient4 extends Model
{
    use HasFactory;
    protected $table = 'patient4';
    protected $fillable = ['X','Y','time','button','correct'];
}
