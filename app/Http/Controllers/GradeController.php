<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GradeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $grades = Grade::paginate();

        return view('grade.index', compact('grades'))
            ->with('i', ($request->input('page', 1) - 1) * $grades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $grade = new Grade();

        return view('grade.create', compact('grade'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GradeRequest $request): RedirectResponse
    {
        Grade::create($request->validated());

        return Redirect::route('grades.index')
            ->with('success', 'Grade created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $grade = Grade::find($id);

        return view('grade.show', compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $grade = Grade::find($id);

        return view('grade.edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GradeRequest $request, Grade $grade): RedirectResponse
    {
        $grade->update($request->validated());

        return Redirect::route('grades.index')
            ->with('success', 'Grade updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Grade::find($id)->delete();

        return Redirect::route('grades.index')
            ->with('success', 'Grade deleted successfully');
    }
}
