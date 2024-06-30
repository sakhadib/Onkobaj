<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upozilla extends Model
{
    use HasFactory;

    protected $table = 'upozillas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'district_id'
    ];
}
