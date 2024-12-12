<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Section;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EnrollmentRequest;
use App\Models\Grade;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    public function index(Request $request): View
    {
        $enrollments = Enrollment::with('student', 'section.grade')
            ->get()
            ->groupBy('section.grade.nombre');

        return view('enrollment.index', compact('enrollments'));
    }

    public function store(EnrollmentRequest $request): RedirectResponse
    {
        Enrollment::create($request->validated());

        return Redirect::route('enrollments.index')
            ->with('success', 'Enrollment created successfully.');
    }

    public function show($id): View
    {
        $enrollment = Enrollment::find($id);

        return view('enrollment.show', compact('enrollment'));
    }

    public function create(): View
    {
        $enrollment = new Enrollment();
        $grades = Grade::all();
        return view('enrollment.create', compact('enrollment', 'grades'));
    }

    public function edit($id): View
    {
        $enrollment = Enrollment::with('sections')->find($id);
        $grades = Grade::all();

        return view('enrollment.edit', compact('enrollment', 'grades'));
    }

    public function searchByCedula(Request $request)
    {
        $student = Student::where('cedula_escolar', $request->cedula)->first();
        if ($student) {
            return response()->json($student);
        } else {
            return response()->json(['error' => 'Student not found'], 404);
        }
    }

    public function getSectionsByGrade(Request $request)
    {
        $sections = Section::where('grade_id', $request->grade_id)
            ->where('enrollments_count', '<', 'numero_maximo_alumnos')
            ->get();

        return response()->json($sections);
    }

    public function update(EnrollmentRequest $request, Enrollment $enrollment): RedirectResponse
    {
        $enrollment->update($request->validated());

        return Redirect::route('enrollments.index')
            ->with('success', 'Enrollment updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Enrollment::find($id)->delete();

        return Redirect::route('enrollments.index')
            ->with('success', 'Enrollment deleted successfully');
    }
}
