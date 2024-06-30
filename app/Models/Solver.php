<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solver extends Model
{
    use HasFactory;

    protected $table = 'solvers';
    protected $primaryKey = 'id';
}
