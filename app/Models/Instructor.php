<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table = '_instructor';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'genero',
        'users_id',
    ];
}
