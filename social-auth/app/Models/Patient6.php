<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient6 extends Model
{
    use HasFactory;
    protected $table = 'patient6';
    protected $fillable = ['X','Y','time','button','correct'];
}
