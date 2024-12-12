<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SectionRequest;
use App\Models\Grade;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $sections = Section::with('grade')->paginate();
    
        return view('section.index', compact('sections'))
            ->with('i', ($request->input('page', 1) - 1) * $sections->perPage());
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $section = new Section(); 
        $grades = Grade::all(); 
        return view('section.create', compact('section', 'grades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectionRequest $request): RedirectResponse
{
    // Validar que el nombre de la sección no se repita en el mismo grado
    $exists = Section::where('nombre', $request->nombre)
                     ->where('grade_id', $request->grade_id)
                     ->exists();

    if ($exists) {
        return Redirect::back()
            ->withErrors(['nombre' => 'El nombre de la sección ya está en uso para este grado.'])
            ->withInput();
    }

    // Validar que la cantidad de alumnos por sección no supere lo permitido por el grado
    $grade = Grade::find($request->grade_id);
    $totalAlumnos = Section::where('grade_id', $request->grade_id)->sum('numero_maximo_alumnos');

    if ($totalAlumnos + $request->numero_maximo_alumnos > $grade->numero_maximo_estudiantes) {
        return Redirect::back()
            ->withErrors(['numero_maximo_alumnos' => 'La cantidad total de alumnos en las secciones supera lo permitido por el grado.'])
            ->withInput();
    }

    // Crear la sección si no existen duplicados y la cantidad de alumnos es válida
    Section::create($request->validated());

    return Redirect::route('sections.index')
        ->with('success', 'Section created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $section = Section::with('grade')->find($id);

        return view('section.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $section = Section::with('grade')->find($id); 
        $grades = Grade::all();

        return view('section.edit', compact('section', 'grades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SectionRequest $request, Section $section): RedirectResponse
    {
        $section->update($request->validated());

        return Redirect::route('sections.index')
            ->with('success', 'Section updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Section::find($id)->delete();

        return Redirect::route('sections.index')
            ->with('success', 'Section deleted successfully');
    }
}
