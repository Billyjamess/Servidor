<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidato extends Model
{
    protected $table = 'candidatos';

    public $timestamps = false;

    protected $fillable = ['nome','email','id_linguagem','id_vagas'];
    use HasFactory;
}
