<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function index() {
        $students = Students::orderBy('id', 'asc')->get();

        return response()->json($students);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'birthDate' => 'required',
            'course_id' => 'required'
        ]);

        $students = Students::create($request->all());
        return response()->json($students->name . ' with email ' . $students->email . ' created successfully');
    }

    public function show($id)
    {
        $students = Students::find($id);
        return response()->json($students);
    }

    public function update(Request $request, Students $student)
    {
        $request->validate([
            'name' => 'nullable',
            'email' => 'nullable',
            'birthDate' => 'nullable',
            'course_id' => 'nullable'
        ]);

        $student->update($request->all());
        return response()->json($student->name . ' with email ' . $student->email . ' updated successfully');
    }

    public function destroy($id)
    {
        $students = Students::find($id);
        $students->delete();
        return response()->json($students->name . ' with email ' . $students->email . ' deleted successfully');
    }
}
