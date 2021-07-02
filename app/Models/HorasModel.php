<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorasModel extends Model
{
    use HasFactory;
    protected $fillable = ['name','id_turno'];
    protected $table = "horas";
}
