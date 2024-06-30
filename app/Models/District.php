<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'districts'; // table name
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
    ];
}
