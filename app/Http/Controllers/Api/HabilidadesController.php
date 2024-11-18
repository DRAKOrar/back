<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Habilidad;
use App\Models\Student;
use Illuminate\Http\Request;

class HabilidadesController extends Controller
{
    public function store(Request $request, $studentId)
    {
        $student = Student::find($studentId);

        if (!$student) {
            return response()->json(['message' => 'Estudiante no encontrado'], 404);
        }

        $validatedData = $request->validate([
            'fuerza' => 'required|integer|min:0|max:100',
            'estamina' => 'required|integer|min:0|max:100',
            'balance' => 'required|integer|min:0|max:100',
            'resistencia' => 'required|integer|min:0|max:100',
            'conocimiento' => 'required|integer|min:0|max:100',
            'destreza' => 'required|integer|min:0|max:100',
            'f_voluntad' => 'required|integer|min:0|max:100',
            'carisma' => 'required|integer|min:0|max:100',
            'construccion' => 'required|integer|min:0|max:100',
            'musculatura' => 'required|integer|min:0|max:100',
            'punteria' => 'required|integer|min:0|max:100',
            'inteligencia' => 'required|integer|min:0|max:100',
            'salud' => 'required|integer|min:0|max:100',
            'logica' => 'required|integer|min:0|max:100',
            'sabiduria' => 'required|integer|min:0|max:100',
            'intuicion' => 'required|integer|min:0|max:100',
            'verborrea' => 'required|integer|min:0|max:100',
            'apariencia' => 'required|integer|min:0|max:100',
        ]);

        $habilidad = Habilidad::updateOrCreate(
            ['student_id' => $student->id],
            $validatedData
        );

        return response()->json(['message' => 'Habilidad asociada al estudiante', 'data' => $habilidad], 201);
    }

    public function show($studentId)
    {
        $student = Student::with('habilidad')->find($studentId);

        if (!$student) {
            return response()->json(['message' => 'Estudiante no encontrado'], 404);
        }

        return response()->json(['student' => $student, 'habilidad' => $student->habilidad], 200);
    }
}
