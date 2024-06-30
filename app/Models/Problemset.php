<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problemset extends Model
{
    use HasFactory;

    protected $table = 'problemsets';
    protected $primaryKey = 'id';
}
