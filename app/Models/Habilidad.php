<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;

    protected $table = 'habilidades'; // Nombre exacto de la tabla en tu base de datos

    protected $fillable = [
        'student_id',
        'fuerza',
        'estamina',
        'balance',
        'resistencia',
        'conocimiento',
        'destreza',
        'f_voluntad',
        'carisma',
        'construccion',
        'musculatura',
        'punteria',
        'inteligencia',
        'salud',
        'logica',
        'sabiduria',
        'intuicion',
        'verborrea',
        'apariencia',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
