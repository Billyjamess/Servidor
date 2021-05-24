<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linguagem extends Model
{
    protected $table = 'linguagems';

    public $timestamps = false;

    protected $fillable = ['nome'];
    use HasFactory;
}
