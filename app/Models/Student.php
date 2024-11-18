<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'language',
        'salaId',
        'profile_picture'
    ];

    // Relación uno a uno con Habilidad
    public function habilidad()
    {
        return $this->hasOne(Habilidad::class, 'student_id');
    }
}
