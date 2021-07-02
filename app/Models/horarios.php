<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    use HasFactory;
     protected $fillable = ['id_ambiente','id_curso','id_hora','id_dia','id_semestre'];
     
    protected $table = "horarios";
}
