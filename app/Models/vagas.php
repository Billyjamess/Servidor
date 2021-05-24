<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vagas extends Model
{
    protected $table = 'vagas';

    public $timestamps = false;

    protected $fillable = ['nome','id_linguagem'];
    use HasFactory;
}
