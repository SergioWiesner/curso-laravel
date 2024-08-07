<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiantes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "estudiantes";
    protected $fillable = ['id', 'nombre', 'curso', 'telefono', 'correo', 'created_at', 'updated_at'];    
}
